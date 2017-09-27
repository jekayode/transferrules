<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $fillable = ['name', 'status', 'wallet_id', 'bank_id', 'account_number', 'created_at', 'updated_at'];
}
