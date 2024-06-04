<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Diagnostic extends Model
{
    public function echograms(): BelongsToMany
    {
        return $this->belongsToMany(Echogram::class);
    }

    public function findings(): BelongsToMany
    {
        return $this->belongsToMany(Finding::class);
    }
}
