<?php

namespace App\Http;

use App\Services\Maromba;
use Illuminate\Http\Request;

class MarombaController
{
    private $maromba;

    public function __construct(Maromba $maromba)
    {
        $this->maromba = $maromba;
    }

    public function index(Request $request)
    {
        $params = $request->all();

        $marombas = $this->maromba->index($params);

        return view('maromba.index', compact('marombas'));
    }
}
