<?php

/**
 * Created by PhpStorm.
 * User: harold
 * Date: 20/02/16
 * Time: 15:36
 */

namespace Atomcorp\Http\Application\Contract;

interface IEstablishmentService
{
    public function findByLimit($limit);

    public function findById($id);
}