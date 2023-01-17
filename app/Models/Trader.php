<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trader extends Model
{
    protected $primaryKey="trade_id";
    use HasFactory;
    protected $fillable = [
        "name",
        "description"
    ];
}
