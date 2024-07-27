<?php

namespace App\Domains\Customer\Models\Traits\Attribute;

trait CustomerAttribute
{

    /**
     * Customer First Name + Last Name
     * @return string
     */
    public function getFullName(): string
    {
        return $this->first_name . $this->last_name;
    }

}
