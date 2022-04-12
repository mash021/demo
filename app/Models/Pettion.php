<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pettion extends Model
{
	use HasFactory;

	protected $fillable = [
		'title', 'description'
		, 'category', 'author', 'signees'
	];
}