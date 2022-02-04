@component('mail::message')
# Hi, {{ $booking->name }}

Thank you for requesting booking on Kaspuhan Sinar Resmi, we will process your booking request as soon as possible

Thanks,<br>
{{ config('app.name') }}
@endcomponent
