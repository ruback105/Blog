<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = ['post_slug', 'content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
