<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo "<h1>Fluent Strings</h1>";

        $slice = Str::of("My name is Lanre")->after("My name");
        echo $slice.'<br/>';

        $slice2 = Str::of("App\Http\Controllers\Controller")->afterLast("\\");
        echo $slice2.'<br/>';

        $string = Str::of("Hello")->append("World!");
        echo $string.'<br/>';

        $Upper2lower = Str::of("THIS TEXT WAS CONVERTED TO LOWER CASE")->lower();
        echo $Upper2lower.'<br/>';

        $replaced = Str::of("Laravel 7.0")->replace("7.0", "8.0");
        echo $replaced.'<br/>';

        $title = Str::of("My name is Lanre Samuel")->title();
        echo $title.'<br/>';

        $slug = Str::of("Programming is the best")->slug("-");
        echo $slug.'<br/>';

        $subStr = Str::of("Laravel Framework")->substr(8);
        echo $subStr.'<br/>';

        $trim = Str::of("/Laravel8/Framework")->trim("/");
        echo $trim.'<br/>';

        $upper = Str::of("Hello World!")->upper();
        echo $upper.'<br/>';
    }
}
