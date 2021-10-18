@component('mail::message')
<strong>Ime: </strong>{{ $data['ime'] }}
<strong>E-mail: </strong>{{ $data['email'] }}

<strong>Poruka</strong>
{{ $data['description'] }}

@endcomponent
