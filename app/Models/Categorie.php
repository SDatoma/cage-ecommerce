<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorie
 * 
 * @property int $id_categorie
 * @property string|null $libelle_categorie
 * @property string|null $image_categorie
 * @property int|null $etat_categorie
 * 
 * @property Collection|Produit[] $produits
 * @property Collection|SousCategorie[] $sous_categories
 *
 * @package App\Models
 */
class Categorie extends Model
{
	protected $table = 'categorie';
	protected $primaryKey = 'id_categorie';
	public $timestamps = false;

	protected $casts = [
		'etat_categorie' => 'int'
	];

	protected $fillable = [
		'libelle_categorie',
		'image_categorie',
		'etat_categorie'
	];

	public function produits()
	{
		return $this->hasMany(Produit::class, 'id_categorie');
	}

	public function sous_categories()
	{
		return $this->hasMany(SousCategorie::class, 'id_categorie');
	}
}
