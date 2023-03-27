<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * USER ATTRIBUTES
 * $this->attributes['id'] - int - contains the user primary key (id)
 * $this->attributes['name'] - string - contains the user name
 * $this->attributes['email'] - string - contains the user email
 * $this->attributes['email_verified_at'] - timestamp - contains the user email verification date
 * $this->attributes['password'] - string - contains the user password
 * $this->attributes['remember_token'] - string - contains the user password
 * $this->attributes['role'] - string - contains the user role (client or admin)
 * $this->attributes['level'] - int - contains the user level
 * $this->attributes['points'] - int - contains the points at the moment
 * $this->attributes['created_at'] - timestamp - contains the user creation date
 * $this->attributes['updated_at'] - timestamp - contains the user update date
 */

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'level',
        'points',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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

 public function getEmail()
 {
 return $this->attributes['email'];
 }

 public function setEmail($email)
 {
 $this->attributes['email'] = $email;
 }

 public function getPassword()
 {
 return $this->attributes['password'];
 }

 public function setPassword($password)
 {
 $this->attributes['password'] = $password;
 }

 public function getRole()
{
    return $this->attributes['role'];
}


 public function setRole($role)
 {
 $this->attributes['role'] = $role;
 }

 public function getLevel()
 {
 return $this->attributes['level'];
 }

 public function setLevel($level)
 {
 $this->attributes['level'] = $level;
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


 public function getTreasureId(): int
 {
 return $this->attributes['treasure_id'];
 }
  
 public function setTreasureId(int $treasure_id): void
 {
     $this->attributes['treasure_id'] = $treasure_id;
 }
 
 public function getTreasure(): Treasure
 {
 return $this->treasure;
 }
 
 public function setTreasure($treasure): void
 {
 $this->treasure_id = $treasure;
 }
 
 public function treasure()
    {
    return $this->hasOne(Treasure::class);
    }
}
