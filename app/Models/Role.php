<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id_role
 * @property string|null $libelle_role
 * 
 * @property Collection|Boutique[] $boutiques
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'role';
	protected $primaryKey = 'id_role';
	public $timestamps = false;

	protected $fillable = [
		'libelle_role'
	];

	public function boutiques()
	{
		return $this->hasMany(Boutique::class, 'id_role');
	}

	public function users()
	{
		return $this->hasMany(User::class, 'id_role');
	}
}
