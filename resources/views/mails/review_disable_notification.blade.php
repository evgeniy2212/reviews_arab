@component('mail::message')
    مرحبًا!

    ."{{ config('app.name') }} "تم ترك مراجعة حول شركتك في

    لقراءة المراجعة ، انقر فوق الارتباط أدناه:
@component('mail::button', ['url' => $url])
    "انظر الاستعراض"
@endcomponent

    شكرا على وقتك!

    باحترام،

The {{ config('app.name') }} Team
@endcomponent
