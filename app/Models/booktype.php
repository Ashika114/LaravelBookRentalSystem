<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booktype extends Model
{
    use HasFactory;
    public $table="booktype";
    protected $primaryKey = 'booktypeid';
}
