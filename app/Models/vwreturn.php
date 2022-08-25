<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vwreturn extends Model
{
    use HasFactory;
    public $table="vwreturn";
    protected $primaryKey = 'returnid';
}
