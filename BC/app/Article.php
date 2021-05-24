<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['titre', 'content', 'cover', 'figure_1', 'figure_2'];
}
