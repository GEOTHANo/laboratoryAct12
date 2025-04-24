<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import the User model

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'author', 'user_id'];


    // Define the relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
