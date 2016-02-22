<?php

/**
 * Created by PhpStorm.
 * User: harold
 * Date: 20/02/16
 * Time: 15:44
 */

namespace Atomcorp\Http\Repositories\Contract;

interface IEstablishmentRepository
{
    public function findByLimit($limit);

    public function findById($id);
}