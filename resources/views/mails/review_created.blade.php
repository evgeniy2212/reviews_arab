@component('mail::message')

.{{ $name }} مرحبا كيفر،

{{ config('app.name') }}تقييمك منشور الآن على موقع

@component('mail::button', ['url' => $url])
    تقييمك
@endcomponent

<br>مع تحياتنا،
{{ config('app.name') }}- فريق
@endcomponent
