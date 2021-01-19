<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * 
 * 
 *
 * @package App\Models
 */
class News extends Model
{
	protected $table = 'newsletter';
	protected $primaryKey = 'id_newsletter';
	public $timestamps = false;

	protected $fillable = [
		'email_newsletter'
	];
}
