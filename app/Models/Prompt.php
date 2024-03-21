<?php

namespace App\Models;

use \Spatie\Tags\HasTags;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Prompt extends Model implements HasMedia
{
    use HasFactory, HasTags, HasSEO, HasTranslations, InteractsWithMedia;


    protected $guarded = [];

    public $translatable = ['title', 'description'];


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

    public function getRouteKeyName()
    {
        return 'slug';
    }


    protected static function boot()
    {
        parent::boot();
        static::created(function ($prompt) {

            $uuid = Str::uuid();
            $prompt->update(['slug' => $uuid]);
        });
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Fit::Contain, 300, 300)
            ->nonQueued();
    }
}
