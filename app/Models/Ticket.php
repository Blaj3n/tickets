<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('event_id', '=', $this->getAttribute('event_id'))
            ->where('user_id', '=', $this->getAttribute('user_id'));
 
        return $query;
    }

    use HasFactory;
    protected $fillable = [
        "status"
    ];
}
