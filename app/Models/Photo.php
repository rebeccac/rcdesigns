<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	// set fields that can be mass-assigned (fields user can edit)
	protected $fillable = [
		'url',
		'title',
		'alt',
		'description'
	];

}
