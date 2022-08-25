<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookreturn extends Model
{
    use HasFactory;
    public $table="bookreturn";
    protected $primaryKey = 'returnid';
    public $timestamps =false;
}
