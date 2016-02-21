<?php

namespace Atomcorp\Http\Controllers;

use Atomcorp\Http\Application\Contract\IEstablishmentService;
use Illuminate\Http\Request;

use Atomcorp\Http\Requests;
use Atomcorp\Http\Controllers\Controller;

class HomeController extends Controller
{

    private $establishmentService;

    public function __construct(IEstablishmentService $establishmentService)
    {
        $this->establishmentService = $establishmentService;
    }

    public function getHome(){
        $establishments = $this->establishmentService->findByLimit(5);
        return view('home', array('establishments' => $establishments));
    }
}
