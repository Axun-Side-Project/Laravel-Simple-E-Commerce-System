<?php

namespace App\Domains\Customer\Models\Traits\Scope;

trait CustomerScope
{

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

}
