<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Promotion
 * 
 * @property int $id_promotion
 * @property int|null $pourcentage_promotion
 * @property string|null $code_promotion
 * @property Carbon|null $date_debut_promotion
 * @property Carbon|null $date_fin_promotion
 * @property int|null $id_produit
 * 
 * @property Produit $produit
 *
 * @package App\Models
 */
class Promotion extends Model
{
	protected $table = 'promotion';
	protected $primaryKey = 'id_promotion';
	public $timestamps = false;

	protected $casts = [
		'pourcentage_promotion' => 'int',
		'id_produit' => 'int'
	];

	protected $dates = [
		'date_debut_promotion',
		'date_fin_promotion'
	];

	protected $fillable = [
		'pourcentage_promotion',
		'code_promotion',
		'date_debut_promotion',
		'date_fin_promotion',
		'id_produit'
	];

	public function produit()
	{
		return $this->belongsTo(Produit::class, 'id_produit');
	}
}
