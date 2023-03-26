@component('mail::message')

    - **Details**:
    - **Name**: {{ $data->name }}
    - **Email**: {{ $data->email }}
    - **Phone no.**: {{ $data->mobile }}
    {{-- - **Subject**: {{ $data->subject }} --}}
    - **Message**: {{ $data->message }}
@endcomponent
