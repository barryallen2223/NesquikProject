<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * TREASURE ATTRIBUTES
 * $this->attributes['id'] - int - contains the product primary key (id)
 * $this->attributes['name'] - string - contains the product name
 * $this->attributes['startsAt'] - string - contains the date when the Treasure Hunt starts
 * $this->attributes['endsAt'] - string - contains the date when the Treasure Hunt ends
 * $this->attributes['description'] - string - contains the product description
 * $this->attributes['points'] - int - contains the points the user will win if they complete the Treasure Hunt
 * $this->attributes['created_at'] - timestamp - contains the product creation date
 * $this->attributes['updated_at'] - timestamp - contains the product update date
 */

class Treasure extends Model
{
    
    public function getId()
    {
    return $this->attributes['id'];
    }
   
    public function setId($id)
    {
    $this->attributes['id'] = $id;
    }
   
    public function getName()
    {
    return $this->attributes['name'];
    }
   
    public function setName($name)
    {

    $this->attributes['name'] = $name;
    }
   
    public function getStartsAt()
    {
    return $this->attributes['startsAt'];
    }
   
    public function setStartsAt($startsAt)
    {
    $this->attributes['startsAt'] = $startsAt;
    }
   
    public function getEndssAt()
    {
    return $this->attributes['endsAt'];
    }
   
    public function setEndssAt($endsAt)
    {
    $this->attributes['endsAt'] = $endsAt;
    }
   
    public function getDescription()
    {
    return $this->attributes['description'];
    }
   
    public function setDescription($description)
    {
    $this->attributes['description'] = $description;
    }
   
    public function getPoints()
    {
    return $this->attributes['points'];
    }
   
    public function setPoints($points)
    {
    $this->attributes['points'] = $points;
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
