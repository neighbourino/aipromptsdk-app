<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Spatie\Tags\HasTags;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use RalphJSmit\Laravel\SEO\SchemaCollection;

class Prompt extends Model
{
    use HasFactory, HasTags, HasSEO;
    

    protected $guarded = [];


    public function getDynamicSEOData(): SEOData
    {


        $pathToFeaturedImageRelativeToPublicPath = '';

        return new SEOData(
            title: ($this->seo->title) ? $this->seo->title : $this->title,
            description: ($this->seo->description) ? $this->seo->description : $this->short_description,
            image: $pathToFeaturedImageRelativeToPublicPath,
            schema: SchemaCollection::initialize()->addArticle(),
        );
    }
}
