<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';
    protected $fillable = ['name', 'lang', 'status', 'image', 'type', 'parent'];

    public function parent()
    {
        return $this->belongsTo(BlogCategory::class, 'parent');
    }
    public function children()
    {
        return $this->hasMany(BlogCategory::class, 'parent', 'id');
    }
}
