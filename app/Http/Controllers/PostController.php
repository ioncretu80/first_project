<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    protected $table='posts';




   public function create(){
       $date=[
           'title' => 'title of post from phpstorm',
           'content' => 'some interesting content',
           'image' => 'imageblablabla.jpg',
           'likes' => '20',
           'is_published' => '1',

       ];
       Post::create($date);
       dd('create');

   }

    public function index(){
        $post =Post::find(1);
        dd($post->title);

        return "this is my posts";
    }
}
