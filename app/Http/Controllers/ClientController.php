<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function getPostById($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json();
    }

    public function addPost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => "new title",
            'body' => "this is a cool sentence"
        ]);
        return $post->json();
    }

    public function updatePost($id)
    {
        $update = Http::put('https://jsonplaceholder.typicode.com/posts/'.$id, [
            'id' => $id,
            'title' => "cool new title",
            'body' => "New description"
        ]);
        return $update->json();  
    }

    public function deletePost($id)
    {
        $delete = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return "Post deleted successfully";
        return $delete->json();
    }
}
