<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['titre', 'description', 'prix', 'pdf_url', 'cover'];
}
