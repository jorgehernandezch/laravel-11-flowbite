<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'avatar',
        'whatsapp',
        'twitter',
        'facebook',
        'instagram',
        'youtube',
        'about_me',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
