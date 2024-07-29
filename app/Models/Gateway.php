<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Gateway extends Model
{
    use HasFactory,HasApiTokens;
    protected $guarded = [];
    protected $casts = [
        'status' => 'boolean',
        'code' => 'string',
        'extra' => 'object',
        'input_form'=> 'object',
        'supported_currencies'=>'object',
        // 'gateway_parameters'=>'json',
        'gateway_parameters'=> AsArrayObject::class,
    ];

    public function currencies()
    {
        return $this->hasMany(GatewayCurrency::class, 'method_code', 'code');
    }

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function singleCurrency()
    {
        return $this->hasOne(GatewayCurrency::class, 'method_code', 'code')->orderBy('id','desc');
    }

    public function scopeCrypto()
    {
        return $this->crypto == 1 ? 'crypto' : 'fiat';
    }

    public function scopeAutomatic()
    {
        return $this->where('code', '<', 1000);
    }

    public function scopeManual()
    {
        return $this->where('code', '>=', 1000);
    }
}
