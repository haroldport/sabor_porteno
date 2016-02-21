<?php

namespace Atomcorp\Http\Domain\Model;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    protected $id;
    protected $name;
    protected $email;
    protected $address;
    protected $description;
    protected $type;
    protected $phone;
    protected $images;
    protected $lat;
    protected $lon;
    protected $fillable = ['name', 'email', 'address', 'description', 'type', 'phone', 'images', 'lat', 'lon'];

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getImages()
    {
        return $this->images;
    }

    public function getLat()
    {
        return $this->lat;
    }

    public function getLon()
    {
        return $this->lon;
    }
}
