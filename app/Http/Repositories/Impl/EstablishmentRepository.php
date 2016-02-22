<?php

/**
 * Created by PhpStorm.
 * User: harold
 * Date: 20/02/16
 * Time: 15:44
 */

namespace Atomcorp\Http\Repositories\Impl;

use Atomcorp\Http\Domain\Model\Establishment;
use Atomcorp\Http\Repositories\Contract\IEstablishmentRepository;

class EstablishmentRepository implements IEstablishmentRepository
{

    public function findByLimit($limit)
    {
        $establishments = Establishment::orderBy('name', 'asc')
            ->take($limit)
            ->get();
        return $establishments;
    }

    public function findById($id)
    {
        $establishment = Establishment::where('id', $id)
            ->orderBy('name', 'asc')
            ->take(1)
            ->get();
        return $establishment;
    }
}