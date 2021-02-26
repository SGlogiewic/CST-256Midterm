<?php
namespace App\Models;

class UserModel
{
    private $firstname;
    private $lastname;
    private $age;
    private $email;
    
    //Class contructor
    public function __construct($firstname, $lastname, $age, $email)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->email = $email;
        
    }
    
    /**
     * Getter Method -> firstname
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    
    /**
     * Getter Method -> lastname
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    
    /**
     * Getter Method -> age
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }
    
    /**
     * Getter Method -> email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}