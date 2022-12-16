<?php

namespace UnitTests;

require dirname(__DIR__) . '/Composite/Product.php';

use Composite\Product;
use Exception;

//php vendor/phpunit/phpunit/phpunit --testdox UnitTests

class ProductTest extends \PHPUnit\Framework\TestCase
{
    public function testSetValidPrice(): void
    {
        $price = 10;
        $product = new Product();
        $product->setPrice($price);

        $this->assertEquals($price, $product->getPrice());
    }

    public function testSetNegativePrice(): void
    {
        $price = -10;
        $product = new Product();
        $this->expectException(Exception::class);
        $product->setPrice($price);

        $this->assertEquals($price, $product->getPrice());
    }

    public function testSetZeroPrice(): void
    {
        $price = -0;
        $product = new Product();
        $product->setPrice($price);

        $this->assertEquals($price, $product->getPrice());
    }

    public function testIsProduct(): void
    {
        $product = new Product();
        $this->assertInstanceOf(Product::class, $product);
    }

    public function testIsComponent(): void
    {
        $product = new Product();
        $this->assertInstanceOf(Product::class, $product);
    }
}