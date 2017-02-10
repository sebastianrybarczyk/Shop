<?php





class Product 
{
    protected $id;
    protected $price;
    protected $name;
    protected $description;
    protected $availability;
    
    
    public function __construct($price, $name, $description, $availability) 
    {   
        $this->id=NULL;
        $this->price=$price;
        $this->name=$name;
        $this->quantity=$quantity;
        
        
    }
      
    function getId()
    {
        return $this->id;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getName()
    {
        return $this->name;
    }

    function getDescription()
    {
        return $this->description;
    }

    function getAvailability()
    {
        return $this->availability;
    }


    
    
    
}
