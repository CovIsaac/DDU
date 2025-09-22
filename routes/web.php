<?php

use App\Livewire\Pages\Analytics;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\Meetings;
use App\Livewire\Pages\Notes;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('meetings', Meetings::class)->name('meetings');
    Route::get('notes', Notes::class)->name('notes');
    Route::get('analytics', Analytics::class)->name('analytics');

    Route::view('profile', 'profile')->name('profile');
});

require __DIR__.'/auth.php';
