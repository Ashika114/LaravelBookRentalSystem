<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    use HasFactory;
    public $table="owner";
    public $timestamps =false;
    protected $primaryKey = 'ownerid';
}
