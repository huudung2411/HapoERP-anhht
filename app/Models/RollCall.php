<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RollCall extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'starts_at', 'user_id',
    ];

    protected $dates = [
        'deleted_at', 'starts_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
