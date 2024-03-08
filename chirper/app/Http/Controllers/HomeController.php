<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Сохранить нового пользователя.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function page()
    {
        $information = $this->metadataInformation();

        return view('home', compact('information'));
    }

    public function store(Request $request)
    {
        $url = $request->url();

        $urlWithQueryString = $request->fullUrl();

        $method = $request->method();

        $name = $request->input('home');
    }
}
