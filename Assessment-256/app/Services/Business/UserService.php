<?php
namespace App\Services\Business;

use App\Models\UserModel;
use App\Services\Data\UserDAO;

class SecurityService
{
    //Define the properties
    private $verifyCred;
    public function login(UserModel $credentials)
    {
        //Instantiate the Data Access Layer
        $this->verifyCred = new UserDAO();
        
        //Return true or false by passing credentials
        //to the object
        return $this->verifyCred->findByUser($credentials);
    }
    
    //Manage ACID
    public function addAllInformation(string $firstname, string $lastname,
        int $age, string $email, UserModel $userData)
    {
        //Call the method to create a connection
        $dbObj = $conn->getDBConnect();
        
        //first turn off autocommit
        $conn->setDBAutocommitFalse();
        //Begin transaction
        $conn->beginTransaction();
        
        //Instantiate the Data Access Layer
        $this->addNewUser = new UserDAO($dbObj);
        //Get the user ID
        $userID = $this->addNewUser->getNextID();
        
        //Add the user Data
        $isSuccessful = $this->addNewUser->addUser($userData);
        
        //Instantiate the Data Access Layer 
        $this->addNewUser = new UserDAO($dbObj);
        
        //Add user successfully
        $isSuccessfulAdd = $this->addNewUser->addUser($firstname, $lastname, $age, $email);
        
        if ($isSuccessful && $isSuccessfulAdd)
        {
            $conn->commitTransaction();
            return true;
        }
        else
        {
            return false;
        }
    }
}