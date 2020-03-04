<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    /** @test */
   function dataTest()
    {
        $this->expectException(Exception::class);
        $listing = new ListingBasic();
    }
   
    /** @test */
    function idTest()
    {
        $this->expectException(Exception::class);
        $data = [
            'id' => null
        ];
        
        $listing = new ListingBasic($data);
    }

    /** @test */
    function titleTest()
    {
        $this->expectException(Exception::class);
        $data = [
            'title' => null
        ];
        $listing = new ListingBasic($data);
    }

    /** @test */
    function statusTestBasic()
    { 
        $data = [
            'id' => 1,
            'title' => 'test',
            'status' => 'basic'
        ];
        $ListingBasic = new ListingBasic($data);
        $this->assertEquals('basic', $ListingBasic->getStatus());
    }

    /** @test */
    function objectTest()
    {
        
        $data = [
            'id' => 1,
            'title' => 'test',
            'status' => 'basic'
        ];
        $listing = new ListingBasic($data);
        $this->assertIsObject($listing);
    }

    /** @test */
    function idGetMethodTest()
    {
        $data = [
            'id' => 1,
            'title' => 'test'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals($data['id'], $listing->getId());
        }

      /** @test */
    function titleGetMethodTest()
    {
        $data = [
            'id' => 1,
            'title' => 'test'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals($data['title'], $listing->getTitle());
        }

         /** @test */
    function websiteGetMethodTest()
    {
        $data = [
            'id' => 1,
            'title' => 'test',
            'website' => 'http://www.batman.com',
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals($data['website'], $listing->getWebsite());
      }

      function emailGetMethodTest()
      {
          $data = [
              'id' => 1,
              'title' => 'test',
              'email'=> 'bruce.wayne@batman.com',
          ];
          $listing = new ListingBasic($data);
          $this->assertEquals($data['email'], $listing->getWebsite());
        }

        function twitterGetMethodTest()
        {
            $data = [
                'id' => 1,
                'title' => 'test',
                'twitter'=> 'DCBatman',
            ];
            $listing = new ListingBasic($data);
            $this->assertEquals($data['twitter'], $listing->getWebsite());
          }

          /** @test */
        function arrayMethodsTest()
        { 
        $listing = new ListingBasic([
            'id'=> '1',
            'title'=> 'test',
            'website'=> 'http://www.batman.com',
            'email'=> 'bruce.wayne@batman.com',
            'twitter'=> 'DCBatman',
        ]);
          
        $this->assertEquals([
            'id'=> '1',
            'title'=> 'test',
            'website'=> 'http://www.batman.com',
            'email'=> 'bruce.wayne@batman.com',
            'twitter'=> 'DCBatman',
            'status'=> 'basic'
        ],
            $listing->toArray()
        );

    }
}
            

        

