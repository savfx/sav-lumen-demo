<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
    public function testHomeAbout()
    {
        $this->get('/home/about');
        $this->assertEquals($this->response->getContent(), json_encode([
            "name" => "jetiny",
            "version" => "dev"
        ]));
    }
}
