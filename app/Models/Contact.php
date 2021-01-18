<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 * 
 * 
 *
 * @package App\Models
 */
class Contact extends Model
{
	protected $table = 'info_contact';
	protected $primaryKey = 'id_contact';
	public $timestamps = false;

	protected $fillable = [
		'nom_contact',
		'email_contact',
		'objet_contact',
		'message_contact'
	];
}
