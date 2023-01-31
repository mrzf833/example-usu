<?php

namespace App\Http\Controllers;

use App\Jobs\UsuApiJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsuController extends Controller
{
    public function create()
    {
        $url = "http://usu.test/api/fakultas";

        UsuApiJob::dispatch($url);
    }
}
