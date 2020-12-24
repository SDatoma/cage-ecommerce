<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Slider
 * 
 * @property int $id_slider
 * @property string|null $image_slider
 * @property string|null $text_slider
 * @property int|null $etat_slider
 *
 * @package App\Models
 */
class Slider extends Model
{
	protected $table = 'slider';
	protected $primaryKey = 'id_slider';
	public $timestamps = false;

	protected $casts = [
		'etat_slider' => 'int'
	];

	protected $fillable = [
		'image_slider',
		'text_slider',
		'etat_slider'
	];
}
