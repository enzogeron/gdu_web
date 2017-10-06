@component('mail::message')

# {{ $content['name'] }}
<hr>
Correo electronico: {{ $content['email'] }} | Telefono: {{ $content['phone'] }}
<hr>
Mensaje:<br>
{{ $content['message'] }}

@endcomponent
