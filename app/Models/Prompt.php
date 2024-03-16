<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Spatie\Tags\HasTags;

class Prompt extends Model
{
    use HasFactory, HasTags;
    

    protected $guarded = [];
}
