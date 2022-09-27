<?php

namespace App\Models;

use App\Models\User;
use App\Models\Garment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GarmentHasUser extends Model
{
    use HasFactory, SoftDeletes;

	protected $fillable =[
		'garment_id',
		'user_id',
		'date_loan',
		'date_return'

	];

	public function User()
	{
		return $this->belongsTo(User::class, 'foreign_key', 'other_key');
	}


	public function Garment()
	{
		return $this->belongsTo(Garment::class, 'foreign_key', 'other_key');
	}
}
