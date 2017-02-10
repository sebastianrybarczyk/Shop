<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order
 *
 * @author agnieszka
 */

class Order 
{
    private $user;
    private $items;
    private $status;
      
    
    
    public function __construct(User $user)        
    {   
       $this->user = $user;
       $this->items = [];//inicjalizacja tablicy, najpierw wpisuje jako zmienna a pozniej dodaje[]
       }
    
    public function addCartItem($item)//!!!mozemy stworzyc carte itemu
    {
        $this->items[]=$item;
    }
    public function getUser()
    {
        return $this->user;
    }
    
    function getItems() {
        return $this->items;
    }

    function getStatus() {
        return $this->status;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setItems($items) {
        $this->items = $items;
    }

    function setStatus($status) {
        $this->status = $status;
    }



}
