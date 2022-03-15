<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $fillable = [
        'title', 'content'
    ];
}
