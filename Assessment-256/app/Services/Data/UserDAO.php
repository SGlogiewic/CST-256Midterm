<?php
namespace App\Services\Data;

use App\Models\UserModel;

class UserDAO
{
    //Define the connection string
    private $conn;
    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbname = "midterm";
    private $dbQuery;
    
    //Contructor that creates a connection with the database
    public function __construct()
    {
        //Create a connection to the database
        $this->conn = mysqli_connect($this->servername, $this->firstname, $this->lastname, 
            $this->age, $this->email,  $this->dbname);
        //Make sure to test the connection and see if there are any errors.
    }
    
    /**
     * Method to verify user credentials
     */
    public function findByUser(UserModel $credentials)
    {
        try 
        {
            //Define the query to search the database for the credentials
            $this->dbQuery = "SELECT firstname, lastname, age, email 
                              FROM users 
                              WHERE firstname = '{$credentials->getFirstname()}'
                                    AND lastname = '{$credentials->getLastname()}'
                                    AND age = '{$credentials->getAge()}'
                                    AND email = '{$credentials->getEmail()}'";
            //If the selected query returns a result set
            $result = mysqli_query($this->conn, $this->dbQuery);
            
            if(mysqli_num_rows($result) > 0)
            {
                mysqli_free_result($result);
                mysqli_close($this->conn);
                return true;
            }
            else
            {
                mysqli_free_result($result);
                mysqli_close($this->conn);
                return false;
            }
            
        }
        
        catch(Exception $e)
        {
            
        }
    }
}