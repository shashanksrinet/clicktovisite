<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignStatistic extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'impressions',
        'clicks',
        'cost',
        'date',
        'updated_at'
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id', 'api_id');
    }
}
