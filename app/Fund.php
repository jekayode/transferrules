<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    protected $fillable = ['name', 'amount', 'user_id', 'wallet_id', 'status', 'comment', 'created_at', 'updated_at'];
}