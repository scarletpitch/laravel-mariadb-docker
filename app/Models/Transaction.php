<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'description', 'category', 'user_id', 'date'];

    // A transaction belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
