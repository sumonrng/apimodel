<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GeneralSetting extends Model
{
    use HasFactory;
    protected $casts = [
        'mail_config' => 'object',
        'sms_config' => 'object',
        'off_day' => 'object',
        'firebase_config'=>'object',
        'global_shortcodes' => 'object'
    ];

    public function scopeSiteName($query, $pageTitle)
    {
        $pageTitle = empty($pageTitle) ? '' : ' - ' . $pageTitle;
        return $this->site_name . $pageTitle;
    }

    protected static function boot()
    {
        parent::boot();
        static::saved(function(){
            //Cache::forget('GeneralSetting');
        });
    }
}
