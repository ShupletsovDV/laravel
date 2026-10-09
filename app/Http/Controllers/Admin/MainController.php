<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use GuzzleHttp\Promise\Create;
use Str;

class MainController extends Controller
{
    public function index()
    {
        // $tag=new Tag();
        // $tag->title = "hello world";
        // $tag->save();
        return view('admin.index');
    }
}