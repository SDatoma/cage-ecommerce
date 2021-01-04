<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @package App\Models
 */
class News extends Model
{
	protected $table = 'newsletter';
	public $timestamps = false;

	protected $casts = [
		//
	];

	protected $fillable = [
		'email'
	];
}
