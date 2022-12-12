<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Form extends Authenticatable
{
    protected $fillable = ['id', 'theme', 'text', 'created_at'];

    use HasFactory;
}
