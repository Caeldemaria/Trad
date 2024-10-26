<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RewardRequest extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $table = 'reward_requests';
}
