<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * TREASURE ATTRIBUTES
 * $this->attributes['id'] - int - contains la clave primaria de la review (id)
 * $this->attributes['puntoCarga'] - bool - define si el punto del review tiene o no punto de carga
 * $this->attributes['entradaAcc'] - bool - define si el punto del review tiene entrada accesible
 * para personas con movilidad reducida
 * $this->attributes['banoAcc'] - bool - define si el punto del review tiene baño con acceso para personas
 * con movilidad reducida
 * $this->attributes['likes'] - int - contiene la cantidad de likes que tiene el review.
 * $this->attributes['dislikes'] - int - contiene la cantidad de dislikes que tiene el review.
 * $this->attributes['Ubication'] - Ubication - Ubicacion a la que pertenece el review
 * $this->attributes['points'] - int - contiene los puntos que obtendra el usuario al visitar los puntos
 * $this->attributes['Reviewer'] - Reviewerr - contiene quien dejo la review.
 * $this->attributes['created_at'] - timestamp - contains the product creation date
 * $this->attributes['updated_at'] - timestamp - contains the product update date
 */

class Review extends Model
{
    protected $fillable = [
        'puntoCarga',
        'entradaAcc',
        'banoAcc',
        'points',
        'likes',
        'dislikes'
        ];
    public function getId()
    {
    return $this->attributes['id'];
    }
   
    public function setId($id)
    {
    $this->attributes['id'] = $id;
    }
   
    public function getPuntoCarga():bool
    {
    return $this->attributes['puntoCarga'];
    }
   
    public function setPuntoCarga(bool $puntoCarga)
    {

    $this->attributes['puntoCarga'] = $puntoCarga;
    }
   
    public function getEntradaAcc():bool
    {
    return $this->attributes['entradaAcc'];
    }
   
    public function setEntradaAcc(bool $entradaAcc)
    {
    $this->attributes['entradaAcc'] = $entradaAcc;
    }
   
    public function getBanoAcc():bool
    {
    return $this->attributes['banoAcc'];
    }
   
    public function setBanoAcc(bool $banoAcc)
    {
    $this->attributes['banoAcc'] = $banoAcc;
    }
   
    public function getPoints():int
    {
    return $this->attributes['points'];
    }
   
    public function setPoints(int $points)
    {
    $this->attributes['points'] = $points;
    }
   
    public function getLikes():int
    {
    return $this->attributes['likes'];
    }
   
    public function setLikes(int $likes)
    {
    $this->attributes['likes'] = $likes;
    }

    public function getDislikes():int
    {
    return $this->attributes['dislikes'];
    }
   
    public function setDislikes(int $dislikes)
    {
    $this->attributes['dislikes'] = $dislikes;
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
