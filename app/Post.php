<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters){
        if(isset($filters)){
            return $query->where('title', 'like', '%' . $filters['search'] . '%')
                  ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
