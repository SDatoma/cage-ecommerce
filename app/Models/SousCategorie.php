<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SousCategorie
 * 
 * @property int $id_sous_categorie
 * @property string|null $libelle_sous_categorie
 * @property int|null $id_categorie
 * @property string|null $image_sous_categorie
 * 
 * @property Categorie $categorie
 * @property Collection|Produit[] $produits
 *
 * @package App\Models
 */
class SousCategorie extends Model
{
	protected $table = 'sous_categorie';
	protected $primaryKey = 'id_sous_categorie';
	public $timestamps = false;

	protected $casts = [
		'id_categorie' => 'int'
	];

	protected $fillable = [
		'libelle_sous_categorie',
		'id_categorie',
		'image_sous_categorie'
	];

	public function categorie()
	{
		return $this->belongsTo(Categorie::class, 'id_categorie');
	}

	public function produits()
	{
		return $this->hasMany(Produit::class, 'id_sous_categorie');
	}
}
