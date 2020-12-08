<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PhotoProduit
 * 
 * @property int $id_photo_produit
 * @property string|null $photo_produit
 * @property int|null $id_produit
 * 
 * @property Produit $produit
 *
 * @package App\Models
 */
class PhotoProduit extends Model
{
	protected $table = 'photo_produit';
	protected $primaryKey = 'id_photo_produit';
	public $timestamps = false;

	protected $casts = [
		'id_produit' => 'int'
	];

	protected $fillable = [
		'photo_produit',
		'id_produit'
	];

	public function produit()
	{
		return $this->belongsTo(Produit::class, 'id_produit');
	}
}
