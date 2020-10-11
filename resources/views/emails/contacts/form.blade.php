@component('mail::message')
    # New mail from server

    Email: {{ $data['email'] }}

    Subject: {{ $data['subject'] }}

    Message: {{ $data['message'] }}

    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
