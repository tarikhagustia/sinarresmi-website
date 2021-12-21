@component('mail::message')
# Hi Admin

Someone fill the contact us email

Name : {{ $params['name'] }}
Email : {{ $params['email'] }}
Question : {{ $params['question'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
