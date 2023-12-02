<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'image',
        'image_alt',
        'image_title',
        'image_caption',
        'category',
        'page',
        'properties',
    ];
}
