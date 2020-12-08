<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Commande
 * 
 * @property int $id_commande
 * @property Carbon|null $date_commande
 * @property int|null $etat_commande
 * @property string|null $reference_commande
 * @property int|null $id_user
 * @property int|null $id_produit
 * 
 * @property User $user
 * @property Produit $produit
 * @property Collection|LigneCommande[] $ligne_commandes
 *
 * @package App\Models
 */
class Commande extends Model
{
	protected $table = 'commande';
	protected $primaryKey = 'id_commande';
	public $timestamps = false;

	protected $casts = [
		'etat_commande' => 'int',
		'id_user' => 'int',
		'id_produit' => 'int'
	];

	protected $dates = [
		'date_commande'
	];

	protected $fillable = [
		'date_commande',
		'etat_commande',
		'reference_commande',
		'id_user',
		'id_produit'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}

	public function produit()
	{
		return $this->belongsTo(Produit::class, 'id_produit');
	}

	public function ligne_commandes()
	{
		return $this->hasMany(LigneCommande::class, 'id_commande');
	}
}
