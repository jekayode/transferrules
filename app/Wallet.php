<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = ['name', 'currency', 'rule_id', 'status', 'ref_code', 'created_at', 'updated_at'];
}
