<?php

namespace Src;

class TestClass 
{
	public function write_string($request, $response, $args)
	{
		echo $args['string'];
		echo "Response status code: ".$response->getStatusCode();
	}
}
