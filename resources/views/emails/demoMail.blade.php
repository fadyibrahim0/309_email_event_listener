@component('mail::message')
Hello,
{{$data['name']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
