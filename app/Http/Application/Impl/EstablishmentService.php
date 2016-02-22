<?php

/**
 * Created by PhpStorm.
 * User: harold
 * Date: 20/02/16
 * Time: 15:37
 */

namespace Atomcorp\Http\Application\Impl;

use Atomcorp\Http\Application\Contract\IEstablishmentService;
use Atomcorp\Http\Repositories\Contract\IEstablishmentRepository;

class EstablishmentService implements IEstablishmentService
{
    private $establishmentRepository;

    public function __construct(IEstablishmentRepository $establishmentRepository)
    {
        $this->establishmentRepository = $establishmentRepository;
    }

    public function findByLimit($limit)
    {
        return $this->establishmentRepository->findByLimit($limit);
    }

    public function findById($id)
    {
        return $this->establishmentRepository->findById($id);
    }
}