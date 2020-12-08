<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Adresse
 * 
 * @property int $id_adresse
 * @property string|null $ville_adresse
 * @property string|null $pays_adresse
 * @property string|null $description_adresse
 * @property int|null $id_user
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Adresse extends Model
{
	protected $table = 'adresse';
	protected $primaryKey = 'id_adresse';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int'
	];

	protected $fillable = [
		'ville_adresse',
		'pays_adresse',
		'description_adresse',
		'id_user'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
