<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $newPost = new  Post;
        $newPost->title = 'new Post 4';
        $newPost->short_contend = 'new post short content';
        $newPost->content = 'new post content';
        $newPost->photo = '/store/zor.jpg';

        $newPost->save();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
