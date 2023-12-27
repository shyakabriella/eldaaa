<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
       /**
     * The attributes that are mass assignable.
     *	
     * @var array

     */
    protected $fillable = [
        'name',
        'nid',
        'phone',
        'gender',
        'province',
        'district',
        'sector', 
        'village',
        'ubudehe',
        'asset',
        'education',
        'disability',
        'desease',
        'status'
    ];
}
