<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserTest
 *
 * @author agnieszka
 */

include_once __DIR__ . '/../src/User.php';

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected function setUp() { 
    $this->user = new User(null, 'Aga', 'Zu', 'aga@aga.pl', 'adres');
    }
    
    
        public function testNewUser()
    {
        
        $this->assertInstanceOf(User::class, $this->user);
        
        $this->assertEquals('Aga', $this->user->getFirstName());
        $this->assertEquals('Zu', $this->user->getLastName());
        $this->assertEquals(null, $this->user->getId());
        $this->assertEquals('aga@aga.pl', $this->user->getEmail());
        $this->assertEquals('adres', $this->user->getAddress());
    }
    
    
    
    
}
