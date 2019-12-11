<?php

namespace App\Services;

use App\Models\SubcribeEmail;

class SubcribeEmailService
{
    protected $subcribeEmail;

    public function __construct(SubcribeEmail $subcribeEmail)
    {
        $this->subcribeEmail = $subcribeEmail;
    }

    public function store($params)
    {
        return $this->subcribeEmail->create($params);
    }
}
