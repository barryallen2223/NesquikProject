<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * UBICATION ATTRIBUTES
 * $this->attributes['id'] - int - contains the ubication primary key (id)
 * $this->attributes['name'] - string - contains the ubication name
 * $this->attributes['address'] - string - contains the ubication address
 * $this->attributes['details'] - string - contains the ubication details
 * $this->attributes['latitud'] - string - contains the latitud of the ubication
 * $this->attributes['longitud'] - string - contains the longitud of the ubication
 * $this->attributes['created_at'] - timestamp - contains the product creation date
 * $this->attributes['updated_at'] - timestamp - contains the product update date
 */

class Ubication extends Model
{
    protected $fillable = [
        'name',
        'address',
        'details',
        'latitud',
        'longitud'
        ];
    public function getId()
    {
    return $this->attributes['id'];
    }
   
    public function setId($id)
    {
    $this->attributes['id'] = $id;
    }
   
    public function getName():string
    {
    return $this->attributes['name'];
    }
   
    public function setName(string $name)
    {

    $this->attributes['name'] = $name;
    }
   
    public function getAddress():string
    {
    return $this->attributes['address'];
    }
   
    public function setAddress(string $address)
    {
    $this->attributes['address'] = $address;
    }
   
    public function getDetails():string
    {
    return $this->attributes['details'];
    }
   
    public function setDetails(string $details)
    {
    $this->attributes['details'] = $details;
    }
   
    public function getLatitud():string
    {
    return $this->attributes['latitud'];
    }
   
    public function setLatitud(string $latitud)
    {
    $this->attributes['latitud'] = $latitud;
    }
   
    public function getLongitud():string
    {
    return $this->attributes['longitud'];
    }
   
    public function setLongitud($longitud)
    {
    $this->attributes['longitud'] = $longitud;
    }
   
    public function getCreatedAt()
    {
    return $this->attributes['created_at'];
    }

    public function setCreatedAt($createdAt)
    {
    $this->attributes['created_at'] = $createdAt;
    }
   
    public function getUpdatedAt()
    {
    return $this->attributes['updated_at'];
    }
   
    public function setUpdatedAt($updatedAt)
    {
    $this->attributes['updated_at'] = $updatedAt;
    } 
}
