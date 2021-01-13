@component('mail::message')
<b style="color:blue"><center>FACTURE N° 0001 </center></b>
</br>
<strong>
<p >{{$first_name}} {{$last_name}}</p>
</br>
<p>{{$email}}</p>
</br>
<p>{{$telephone}}</p>
</br>
<p>Pays</p>
<br>
<p>Ville</p>
</strong>
@component('mail::table')
| Nom produit       | Quantite         | Prix unitaire         | Total         |
| :--------- | :------------- |:------------- |:------------- |
<?php  $items = ShoppingCart::all(); ?>
@foreach ($items as $item)
| <?php echo $item->name ?> | <?php echo $item->qty ?> | <?php echo $item->price ?> | <?php echo $item->total ?> |
@endforeach
@endcomponent

<p>Sous Total  : <strong>{{ShoppingCart::total() ?? '0'}} FCFA</strong></p>
</br>
<p>Frais de livraison  :<strong> 0 FCFA </strong></p>
</br>
<p>Prix total :<strong style="color:red"> {{ShoppingCart::total() ?? '0'}} FCFA</strong></p>
</br>

<p style="float:right">Signature</p>
<br><br>
<p style="float: right">L'équipe de Cage Batiment,</p>
{{-- Thanks,<br>
{{ config('app.name') }} --}}
@endcomponent