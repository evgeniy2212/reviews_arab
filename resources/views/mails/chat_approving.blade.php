@component('mail::message')

@lang('service/message.mail.hi') {{ $contact_name }}.

{{ config('app.name') }}, يعلمك, {{ $name }} يريد إضافتك إلى قائمة جهات الاتصال الخاصة به للتواصل معك في الوقت الفعلي. إذا كنت توافق ، انقر على الرابط أدناه.

@component('mail::button', ['url' => $url])
    @lang('service/message.mail.agree')
@endcomponent

شكرًا لك.<br>

فريق {{ config('app.name') }}.
@endcomponent
