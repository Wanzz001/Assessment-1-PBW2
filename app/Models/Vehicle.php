<?php
// Nama : Wandi Ridwansyah
// NIM : 6706220080

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles'; 
    protected $fillable = ['name', 'typeId', 'license', 'dailyPrice'];
}
