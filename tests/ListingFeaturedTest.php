<?php

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase{

/** @test */
function statusTestFeatured()
{ 
    $data = [
        'id' => 1,
        'title' => 'test',
        'status' => 'featured'
    ];

    
    $ListingFeatured = new ListingFeatured($data);
    $this->assertEquals('featured', $ListingFeatured->getStatus());
    }

/** @test */
function cocTest()
{ 
    $data = [
        'id' => 1,
        'title' => 'test',
        'coc' => 'coc'
    ];

    
    $ListingFeatured = new ListingFeatured($data);
    $this->assertEquals('coc', $ListingFeatured->getCoc());
    }
}