<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Finding extends Model
{
    public function diagnostics():BelongsToMany
    {
        return $this->belongsToMany(Diagnostic::class);
    }
}
