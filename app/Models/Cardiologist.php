<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cardiologist extends Model
{
    public function hospitals():BelongsToMany
    {
        return $this->belongsToMany(Hospital::class);
    }

}
