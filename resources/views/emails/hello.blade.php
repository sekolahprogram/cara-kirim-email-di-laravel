@component('mail::message')
# Hello, Febri Hidayan

Selamat Anda berhak mendapatkan source code dari kami, silakan klik tautan berikut.

@component('mail::button', [
    'url' => 'https://github.com/febrihidayan/cara-kirim-email-di-laravel'
])
Github
@endcomponent

Terimakasih,<br>
{{ config('app.name') }}
@endcomponent
