@php
    $classes = $classes ?? 'h-6 w-6';
@endphp

@switch($name)
    @case('calendar')
        <svg xmlns="http://www.w3.org/2000/svg" class="{{ $classes }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 3v2m8-2v2M5 7h14M6 21h12a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1zm2-8h4" />
        </svg>
    @break

    @case('check-circle')
        <svg xmlns="http://www.w3.org/2000/svg" class="{{ $classes }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75 11.25 15 15 9.75m4.5 2.25a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0z" />
        </svg>
    @break

    @case('clipboard')
        <svg xmlns="http://www.w3.org/2000/svg" class="{{ $classes }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 4.5h6m-3 0A1.5 1.5 0 0 0 12 3a1.5 1.5 0 0 0-1.5 1.5H9A1.5 1.5 0 0 0 7.5 6v11.25A2.25 2.25 0 0 0 9.75 19.5h4.5A2.25 2.25 0 0 0 16.5 17.25V6A1.5 1.5 0 0 0 15 4.5h-1.5" />
        </svg>
    @break

    @case('sparkles')
        <svg xmlns="http://www.w3.org/2000/svg" class="{{ $classes }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904 9 18l-.812-2.096a3 3 0 0 0-1.892-1.892L4 13l2.296-.812a3 3 0 0 0 1.892-1.892L9 8l.813 2.296a3 3 0 0 0 1.892 1.892L14 13l-2.295.812a3 3 0 0 0-1.892 1.892zM15 5l.563 1.438a2 2 0 0 0 1.124 1.124L18 8l-1.313.438a2 2 0 0 0-1.124 1.124L15 11l-.563-1.438a2 2 0 0 0-1.124-1.124L12 8l1.313-.438a2 2 0 0 0 1.124-1.124z" />
        </svg>
    @break

    @case('plus')
        <svg xmlns="http://www.w3.org/2000/svg" class="{{ $classes }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v12m6-6H6" />
        </svg>
    @break

    @case('document-text')
        <svg xmlns="http://www.w3.org/2000/svg" class="{{ $classes }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 7h6m-6 4h3m-6 7.5h9A2.25 2.25 0 0 0 17.25 16.5V8.621a2.25 2.25 0 0 0-.659-1.591l-2.97-2.97A2.25 2.25 0 0 0 12.03 3.4L6.75 3.375A2.25 2.25 0 0 0 4.5 5.625v10.875A2.25 2.25 0 0 0 6.75 18.75z" />
        </svg>
    @break

    @case('chart-bar')
        <svg xmlns="http://www.w3.org/2000/svg" class="{{ $classes }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 21V7.5m5.25 13.5V3m5.25 18V10.5m5.25 10.5V13.5" />
        </svg>
    @break

    @case('chevron-right')
        <svg xmlns="http://www.w3.org/2000/svg" class="{{ $classes }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m9 18 6-6-6-6" />
        </svg>
    @break

    @case('clock')
        <svg xmlns="http://www.w3.org/2000/svg" class="{{ $classes }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6l3 3m5.25-3A8.25 8.25 0 1 1 3.75 12a8.25 8.25 0 0 1 16.5 0z" />
        </svg>
    @break

    @case('user-group')
        <svg xmlns="http://www.w3.org/2000/svg" class="{{ $classes }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 20a6 6 0 0 0-12 0m12 0v-1a4 4 0 0 0-4-4h-4a4 4 0 0 0-4 4v1m12 0h1.5m-13.5 0H3m9-9a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
        </svg>
    @break

    @case('bookmark')
        <svg xmlns="http://www.w3.org/2000/svg" class="{{ $classes }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 21 12 17.25 6.75 21V5.25A2.25 2.25 0 0 1 9 3h6a2.25 2.25 0 0 1 2.25 2.25z" />
        </svg>
    @break

    @default
        <span class="sr-only">Icono</span>
@endswitch
