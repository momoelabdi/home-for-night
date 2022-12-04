<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // protected $filables = ['title', 'hoster', 'description', 'tags', 'location', 'email'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
