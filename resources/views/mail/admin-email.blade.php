@component('mail::message')
# Hi, Admin

Ada booking request baru yang perlu persetujuan, berikut informasiny@auth
<p>Name: {{ $booking->name }}</p>
<p>Date In: {{ $booking->date_in }}</p>
<p>Date Out: {{ $booking->date_out }}</p>
<p>Visitors: {{ $booking->visitors }}</p>
<p>Email: {{ $booking->email }}</p>
<p>Phone: {{ $booking->phone_number }}</p>
<p>Purpose: {{ $booking->purpose }}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
