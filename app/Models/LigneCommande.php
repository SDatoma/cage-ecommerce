<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LigneCommande
 * 
 * @property int $id_ligne_commande
 * @property int|null $quantite_commande
 * @property int|null $prix_commande
 * @property int|null $id_commande
 * @property string|null $reference_commande
 * @property int|null $id_produit
 * 
 * @property Commande $commande
 *
 * @package App\Models
 */
class LigneCommande extends Model
{
	protected $table = 'ligne_commande';
	protected $primaryKey = 'id_ligne_commande';
	public $timestamps = false;

	protected $casts = [
		'quantite_commande' => 'int',
		'prix_commande' => 'int',
		'id_commande' => 'int',
		'id_produit' => 'int'
	];

	protected $fillable = [
		'quantite_commande',
		'prix_commande',
		'id_commande',
		'reference_commande',
		'id_produit'
	];

	public function commande()
	{
		return $this->belongsTo(Commande::class, 'id_commande');
	}
}
