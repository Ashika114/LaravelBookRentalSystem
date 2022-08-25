<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publication extends Model
{
    use HasFactory;
    public $table="publication";
    public $timestamps =false;
    protected $primaryKey = 'pubid';
}
