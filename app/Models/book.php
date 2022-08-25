<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    public $table="book";
    public $timestamps =false;
   protected $primaryKey = 'bookid';
}
