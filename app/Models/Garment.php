<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Garment extends Model
{
    use HasFactory, SoftDeletes;

	protected $fillable =[
		'brand_id',
		'category_id',
		'name',
		'size',
		'price',
		'image',
		'stock',
	];


	public function Category()
	{
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}

	public function Brand()
	{
		return $this->belongsTo(Brand::class, 'brand_id', 'id');
	}

	public function GarmentHasUsers()
	{
		return $this->hasMany(GarmentHasUser::class, 'garment_id', 'id');
	}
}
