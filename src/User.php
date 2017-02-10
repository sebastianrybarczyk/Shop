<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author agnieszka
 */



class User
{
    private $firstName;
    private $lastName;
    private $id;
    private $email;
    private $address;
    
    public function __construct($id, $firstName, $lastName, $email, $address)        
    {   
       $this->id = $id;
       $this->firstName = $firstName;
       $this->lastName = $lastName;
       $this->email = $email;
       $this->address = $address;
       
    }
    
    
    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getAddress() {
        return $this->address;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setAddress($address) {
        $this->address = $address;
    }


  
    
    

    
    
}

