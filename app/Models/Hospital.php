<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Hospital extends Model
{

    public function cardiologists():BelongsToMany
    {
        return $this->belongsToMany(Cardiologist::class);
    }
}
