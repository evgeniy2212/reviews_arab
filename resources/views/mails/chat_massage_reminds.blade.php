@component('mail::message')

@lang('service/message.mail.hi') {{ $name }}.

, لإعلامك بوجود رسائل غير مقروءة ، يرجى التحقق منها.{{ config('app.name') }}

شكرًا لك.<br>

فريق {{ config('app.name') }}.
@endcomponent
