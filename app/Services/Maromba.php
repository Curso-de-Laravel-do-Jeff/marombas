<?php

namespace App\Services;

use App\Repositories\MarombaRepository;

class Maromba
{
    private $marombaRepository;

    public function __construct()
    {
        $this->marombaRepository = new MarombaRepository();
    }

    public function index(array $params = [])
    {
        $gender = $params['gender'] ?? '';

        if (!empty($gender)) {
            return $this->marombaRepository->getMarombas($gender);
        }

        return $this->marombaRepository->paginate();
    }
}
