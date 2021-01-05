<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id_user
 * @property string|null $nom_user
 * @property string|null $prenom_user
 * @property string|null $email_user
 * @property string|null $password_user
 * @property string|null $sexe_user
 * @property int|null $telephone_user
 * @property int|null $id_role
 * @property int|null $ok_newsletter
 * @property int|null $type_user
 * 
 * @property Role $role
 * @property Collection|Adresse[] $adresses
 * @property Collection|Commande[] $commandes
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'id_user';
	public $timestamps = false;

	protected $casts = [
		'telephone_user' => 'int',
		'id_role' => 'int',
		'ok_newsletter' => 'int',
		'type_user' => 'int'
	];

	protected $fillable = [
		'nom_user',
		'prenom_user',
		'email_user',
		'password_user',
		'sexe_user',
		'telephone_user',
		'id_role',
		'ok_newsletter',
		'type_user'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'id_role');
	}

	public function adresses()
	{
		return $this->hasMany(Adresse::class, 'id_user');
	}

	public function commandes()
	{
		return $this->hasMany(Commande::class, 'id_user');
	}
}
