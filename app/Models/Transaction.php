<?php
// Nama : Wandi Ridwansyah
// NIM : 6706220080

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction'; 
    public $timestamps = false;
    protected $fillable = ['userId', 'vehicleId', 'startDate', 'endDate', 'price'];
}
