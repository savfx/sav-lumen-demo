<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function about($ctx, $input)
    {
        return $ctx->outputSchema->create([
          "name" => "jetiny",
          "version" => "dev",
        ]);
    }
}
