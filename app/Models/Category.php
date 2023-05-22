<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'parent_id'];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function getName()
    {
        return $this->attributes['category_name'];
    }
}
