<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\Tag;
use App\Models\Media;

class Product extends Model
{
    use HasFactory , Sluggable;
    protected $guarded = [];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class ,'product_category_id','id');
    }

    public function tags(): MorphToMany
    {
        return $this->MorphToMany(Tag::class , 'taggable');
    }

    public function media(): MorphMany
    {
        return $this->MorphMany(Media::class , 'mediable');
    }
}
