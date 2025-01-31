<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'campaignlist';

    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'user_id',
        'campaign_name',
        'campaign_type',
        'target_url',
        'country',
        'country_name',
        'city',
        'city_code',
        'device',
        'daily_limit',
        'end_date',
    ];

    public function statistics()
    {
        return $this->hasMany(CampaignStatistic::class, 'campaign_id', 'api_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

