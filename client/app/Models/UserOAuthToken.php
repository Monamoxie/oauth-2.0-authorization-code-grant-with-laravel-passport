<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOAuthToken extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function hasTokenExpired() 
    {
        return now()->gte($this->updated_at->addSeconds($this->expires_in));
    }
}
