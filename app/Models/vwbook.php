<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vwbook extends Model
{
    use HasFactory;
    public $table="vwbook";
    protected $primaryKey = 'bookid';
}
