<?php
namespace Blueair\Response;

class Test
{
    public function index($request, $response)
    {
    	print_r($request->getAttribute('name'));
    	
    }

    public function joke($request,$response) 
    {
    	var_dump($request->getAttribute('joke'));
    }
}