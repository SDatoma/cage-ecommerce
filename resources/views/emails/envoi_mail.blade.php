@component('mail::message')
# Bonjour Mr/Mme {{$first_name}} {{$last_name}},

Titre 
<br><br>
{{-- @component('mail::panel', ['url' => 'fgfhghghg']) --}}
Contenu de mail
{{-- @endcomponent --}}
<br>
<br>
<p style="float:right">Signature</p>
<br><br>

<p style="float: right">L'équipe de Cage Batiment,</p>
{{-- Thanks,<br>
{{ config('app.name') }} --}}
@endcomponent