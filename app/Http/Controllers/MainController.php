<?php

namespace Atomcorp\Http\Controllers;

use Atomcorp\Http\Application\Contract\IEstablishmentService;
use Illuminate\Http\Request;

use Atomcorp\Http\Requests;
use Atomcorp\Http\Controllers\Controller;

class MainController extends Controller
{

    private $establishmentService;

    public function __construct(IEstablishmentService $establishmentService)
    {
        $this->establishmentService = $establishmentService;
    }

    public function getHome(){
        $establishments = $this->establishmentService->findByLimit(10);
        return view('home', array('establishments' => $establishments));
    }

    public function getEstablishments(){
        $establishments = $this->establishmentService->findByLimit(10);
        return view('establishments', array('establishments' => $establishments));
    }

    public function getEstablishment($id){
        $establishment = $this->establishmentService->findById($id);
        return view('establishment', array('establishment' => $establishment));
    }
}