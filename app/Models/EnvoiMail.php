<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EnvoiMail
 * 
 * @property int $id_envoi_mail
 * @property string|null $titre_mail
 * @property string|null $description_mail
 * @property int|null $etat_mail
 *
 * @package App\Models
 */
class EnvoiMail extends Model
{
	protected $table = 'envoi_mail';
	protected $primaryKey = 'id_envoi_mail';
	public $timestamps = false;

	protected $casts = [
		'etat_mail' => 'int'
	];

	protected $fillable = [
		'titre_mail',
		'description_mail',
		'etat_mail'
	];
}
