<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = ['user_id', 'title', 'hoster', 'description', 'tags', 'location', 'email'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['location'] ?? false) {
            $query->where('location', 'like', '%' . request('location') . '%');
        }

        if ($filters['search'] ?? false) {
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('location', 'like', '%' . request('search') . '%');
        }
    }

    //Realition to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
