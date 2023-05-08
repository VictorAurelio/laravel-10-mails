<x-mail::message>
# {{ $data['name'] }}

<p>
    <strong>Message:</strong><br>
    {{ $data['message'] }}
</p>

<x-mail::button :url="'https://productpage-victoraurelio.netlify.app/'">
Visit my product page by clicking here
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
