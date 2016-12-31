<?php

namespace Wubsite;

use Framewub\Http\Message\Response;

class Hello
{
    public function __invoke($request)
    {
        $response = new Response();
        $response->getBody()->write("Hallo wereld");
        return $response;
    }
}
