<?php

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase{
    
    /** @test */
    function statusTestPremium()
    { 
        $data = [
            'id' => 1,
            'title' => 'test',
            'status' => 'premium'
        ];
 
        
        $ListingPremium = new ListingPremium($data);
        $this->assertEquals('premium', $ListingPremium->getStatus());
    }
    /** @test */
  function descriptionTest()
  { 
      $data = [
          'id' => 1,
          'title' => 'test',
          'description' => 'description'
      ];

      
      $ListingPremium = new ListingPremium($data);
      $this->assertEquals('description', $ListingPremium->getDescription());
  }
}