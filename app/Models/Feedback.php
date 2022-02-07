<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    const STATUS_UNREAD = 0;
    const STATUS_READED = 1;

    public $table = 'feedbacks';
    
    public $fillable = [
        'name',
        'phone',
        'message',
        'status'
    ];

    public function scopeUnreaded()
    {
        return $this->where('status', '=', self::STATUS_UNREAD)->latest();
    }
}
