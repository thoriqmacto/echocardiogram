<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Patient extends Model
{

    public function echograms():BelongsToMany
    {
        return $this->belongsToMany(Echogram::class);
    }
}
