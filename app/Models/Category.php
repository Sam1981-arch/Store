<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

	protected $fillable =[
		'name',
	];

	public function Brands()
	{
		return $this->hasMany(Brand::class, 'brand_id', 'id');
	}


}
