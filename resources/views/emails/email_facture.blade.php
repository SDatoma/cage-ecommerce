@component('mail::message')
<b style="color:black"><center>FACTURE </center></b>

{{$first_name}} {{$last_name}} 
<br>
Adresse mail
<br>
Telephone
<br>
Pays
<br>
Ville
<br>

@component('mail::table')
| Nom produit       | Quantite         | Prix unitaire         | Total         |
| :--------- | :------------- |:------------- |:------------- |
<?php  $items = ShoppingCart::all(); ?>
@foreach ($items as $item)
| <?php echo $item->name ?> | <?php echo $item->qty ?> | <?php echo $item->price ?> | <?php echo $item->total ?> |
@endforeach
@endcomponent

# Sous Total  : {{ShoppingCart::total() ?? '0'}} FCFA
</br></br>
# Frais de livraison  : 0 FCFA 
</br></br>
# Prix total : {{ShoppingCart::total() ?? '0'}} FCFA
</br>
<p style="float:right">Signature</p>
<br><br>

<p style="float: right">L'équipe de Cage Batiment,</p>
{{-- Thanks,<br>
{{ config('app.name') }} --}}
@endcomponent