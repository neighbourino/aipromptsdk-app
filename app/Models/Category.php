<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \Spatie\Tags\HasTags;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use RalphJSmit\Laravel\SEO\SchemaCollection;

class Category extends Model
{
    use HasFactory, HasSEO, HasTranslations;

    protected $guarded = [];

    public $translatable = ['name', 'description'];

    public function prompts()
    {
        return $this->belongsToMany(Prompt::class);
    }

    public function subCategory()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
