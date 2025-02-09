<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawMethod extends Model
{
    use HasFactory;
    protected $casts = [
        'user_data' => 'object',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
