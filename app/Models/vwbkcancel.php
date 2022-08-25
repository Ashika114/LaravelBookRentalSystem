<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vwbkcancel extends Model
{
    use HasFactory;
    public $table="vwbkcancel";
    public $timestamps =false;
    protected $primaryKey = 'bookingid';
}
