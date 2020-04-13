<?php

namespace App\Repositories;

use App\Repositories\Models\Maromba;

class MarombaRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new Maromba();
    }

    public function getMarombas(string $gender = '') {
        return $this->model->where('gender', $gender)->paginate();
    }
}

