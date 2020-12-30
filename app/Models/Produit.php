<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Produit
 * 
 * @property int $id_produit
 * @property string|null $nom_produit
 * @property string|null $description_produit
 * @property int|null $prix_ht_produit
 * @property int|null $quantite_produit
 * @property string|null $stock_produit
 * @property string|null $nouveau_produit
 * @property int|null $etat_produit
 * @property int|null $id_categorie
 * @property int|null $id_sous_categorie
 * @property int|null $id_boutique
 * @property string|null $caracteristique_produit
 * @property string|null $image_produit
 * 
 * @property SousCategorie $sous_categorie
 * @property Boutique $boutique
 * @property Categorie $categorie
 * @property Collection|Commande[] $commandes
 * @property Collection|PhotoProduit[] $photo_produits
 * @property Collection|Promotion[] $promotions
 *
 * @package App\Models
 */
class Produit extends Model
{
	protected $table = 'produit';
	protected $primaryKey = 'id_produit';
	public $timestamps = false;

	protected $casts = [
		'prix_ht_produit' => 'int',
		'quantite_produit' => 'int',
		'etat_produit' => 'int',
		'id_categorie' => 'int',
		'id_sous_categorie' => 'int',
		'id_boutique' => 'int'
	];

	protected $fillable = [
		'nom_produit',
		'description_produit',
		'prix_ht_produit',
		'quantite_produit',
		'stock_produit',
		'nouveau_produit',
		'etat_produit',
		'id_categorie',
		'id_sous_categorie',
		'id_boutique',
		'caracteristique_produit',
		'image_produit'
	];

	public function sous_categorie()
	{
		return $this->belongsTo(SousCategorie::class, 'id_sous_categorie');
	}

	public function boutique()
	{
		return $this->belongsTo(Boutique::class, 'id_boutique');
	}

	public function categorie()
	{
		return $this->belongsTo(Categorie::class, 'id_categorie');
	}

	public function commandes()
	{
		return $this->hasMany(Commande::class, 'id_produit');
	}

	public function photo_produits()
	{
		return $this->hasMany(PhotoProduit::class, 'id_produit');
	}

	public function promotions()
	{
		return $this->hasMany(Promotion::class, 'id_produit');
	}
}
