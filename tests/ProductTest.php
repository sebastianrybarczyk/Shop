<?php


include_once __DIR__ . '/../src/Product.php';


use PHPUnit\Framework\TestCase;


class ProductTest extends TestCase
{
    
    protected function setUp()
    {
        $this->product = new Product (100, 'chleb', 'razowy', 'dostępny' );
        
    }
    
    public function testProductExist()
    {
        
        $this->assertInstanceOf(Product::class, $this->product);
        
    }
    
}
