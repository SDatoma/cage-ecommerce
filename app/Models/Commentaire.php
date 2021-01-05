<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Commentaire
 * 
 * @property int $id_commentaire
 * @property int|null $commentaire_parent
 * @property string|null $resume_commentaire
 * @property Carbon|null $date_commentaire
 * @property int|null $id_produit
 * @property string|null $nom_commentaire
 * @property string|null $email_commentaire
 *
 * @package App\Models
 */
class Commentaire extends Model
{
	protected $table = 'commentaire';
	protected $primaryKey = 'id_commentaire';
	public $timestamps = false;

	protected $casts = [
		'commentaire_parent' => 'int',
		'id_produit' => 'int'
	];

	protected $dates = [
		'date_commentaire'
	];

	protected $fillable = [
		'commentaire_parent',
		'resume_commentaire',
		'date_commentaire',
		'id_produit',
		'nom_commentaire',
		'email_commentaire'
	];
}
