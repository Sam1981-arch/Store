<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\GarmentHasUser;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes,HasRoles;
	



    protected $fillable = [
        'name',
        'email',
        'password',
		'number_id'
    ];

    protected $hidden = [
        'password',
    ];


	public function GarmentHasUsers()
	{
		return $this->hasMany(GarmentHasUser::class, 'user_id', 'id');
	}

}
