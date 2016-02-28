<?php

namespace Atomcorp\Http\Controllers;

use Atomcorp\Http\Application\Contract\IEstablishmentService;

use Atomcorp\Http\Requests;
use Atomcorp\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

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

    public function sendMail(){
        $data = array(
            'name' => Request::input('name'),
            'email' => Request::input('email'),
            'phone' => Request::input('phone'),
            'bodyMessage' => Request::input('message'),
        );
        Mail::send('mail', $data, function ($message) {
            $message->from('no-reply@saborporteno.com', 'Mensaje de la página');
            $message->to('harold.port@gmail.com')->subject('Nuevo mensaje de Sabor Porteño');
        });

        return view('mail-response');
    }
}