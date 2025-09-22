<?php

namespace Database\Seeders;

use App\Models\Meeting;
use App\Models\MeetingAnalytic;
use App\Models\MeetingNote;
use App\Models\MeetingParticipant;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dentists = collect([
            ['name' => 'Dra. Ana Molina', 'email' => 'ana.molina@dentaldemo.test'],
            ['name' => 'Dr. Carlos Rivera', 'email' => 'carlos.rivera@dentaldemo.test'],
        ])->map(fn (array $data) => User::factory()->create($data));

        $patients = collect([
            ['name' => 'Lucía Fernández', 'email' => 'lucia.fernandez@paciente.test'],
            ['name' => 'Mario López', 'email' => 'mario.lopez@paciente.test'],
            ['name' => 'Sofía Herrera', 'email' => 'sofia.herrera@paciente.test'],
            ['name' => 'Pedro Sánchez', 'email' => 'pedro.sanchez@paciente.test'],
        ])->map(fn (array $data) => User::factory()->create($data));

        $treatments = [
            'Profilaxis dental',
            'Ortodoncia de revisión',
            'Blanqueamiento láser',
            'Colocación de carilla',
        ];

        $statuses = ['scheduled', 'confirmed', 'completed'];

        $dentists->each(function (User $dentist) use ($patients, $treatments, $statuses): void {
            $selectedPatients = $patients->random(2);

            $meeting = Meeting::create([
                'dentist_id' => $dentist->id,
                'title' => 'Consulta dental de ' . $selectedPatients->first()->name,
                'description' => 'Revisión integral y planificación de tratamiento dental.',
                'treatment_type' => Arr::random($treatments),
                'location' => 'Clínica Sonrisas Saludables, sala ' . random_int(1, 4),
                'is_virtual' => false,
                'scheduled_at' => Carbon::now()->addDays(random_int(1, 14))->setTime(9 + random_int(0, 4), 0),
                'duration_minutes' => Arr::random([30, 45, 60]),
                'status' => Arr::random($statuses),
                'follow_up_required' => true,
                'follow_up_notes' => null,
                'reminders' => [
                    'email' => Carbon::now()->addDays(1)->toDateTimeString(),
                    'sms' => Carbon::now()->addDays(1)->setTime(8, 0)->toDateTimeString(),
                ],
            ]);

            // Dentist as host participant
            MeetingParticipant::create([
                'meeting_id' => $meeting->id,
                'user_id' => $dentist->id,
                'full_name' => $dentist->name,
                'email' => $dentist->email,
                'phone_number' => fake()->phoneNumber(),
                'role' => 'dentist',
                'status' => 'confirmed',
                'invited_at' => Carbon::now()->subDays(3),
                'joined_at' => null,
                'metadata' => ['lead' => true],
            ]);

            $selectedPatients->each(function (User $patient) use ($meeting): void {
                MeetingParticipant::create([
                    'meeting_id' => $meeting->id,
                    'user_id' => $patient->id,
                    'full_name' => $patient->name,
                    'email' => $patient->email,
                    'phone_number' => fake()->phoneNumber(),
                    'role' => 'patient',
                    'status' => Arr::random(['invited', 'confirmed']),
                    'invited_at' => Carbon::now()->subDays(2),
                    'metadata' => [
                        'dental_history' => Arr::random([
                            'Sensibilidad en premolares',
                            'Uso de ortodoncia removible',
                            'Tratamiento de caries en curso',
                        ]),
                    ],
                ]);
            });

            MeetingNote::create([
                'meeting_id' => $meeting->id,
                'author_id' => $dentist->id,
                'title' => 'Plan de higiene previo',
                'category' => 'preparación',
                'body' => 'Recomendar enjuague de clorhexidina dos veces al día previo a la sesión.',
                'is_private' => false,
                'attachments' => ['checklist' => 'https://demo.dental/notas/preparacion.pdf'],
            ]);

            MeetingNote::create([
                'meeting_id' => $meeting->id,
                'author_id' => $dentist->id,
                'title' => 'Observaciones clínicas',
                'category' => 'diagnóstico',
                'body' => 'Recesión gingival leve en incisivos inferiores. Evaluar férula nocturna.',
                'is_private' => true,
                'attachments' => null,
            ]);

            MeetingAnalytic::create([
                'meeting_id' => $meeting->id,
                'total_duration_minutes' => $meeting->duration_minutes,
                'total_participants' => $meeting->participants()->count(),
                'unique_patients' => $meeting->participants()->where('role', 'patient')->count(),
                'average_engagement' => Arr::random([82.5, 91.3, 88.0]),
                'metrics' => [
                    'questions_resolved' => random_int(3, 7),
                    'satisfaction_score' => Arr::random([4.5, 4.8, 5.0]),
                ],
                'calculated_at' => Carbon::now(),
            ]);
        });
    }
}
