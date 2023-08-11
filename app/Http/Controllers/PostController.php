<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post(); // new 지시자는 새로운 Post 객체를 반환해서 $post에 넣는다.
        $post->title=$request->title; // 입력받은 title을 post의 title에 넣는다.
        $post->body=$request->body;
        $post->user_id=auth()->user()->id; // 로그인 중인 사용자의 id를 post의 user_id에 넣는다.
        $post->save(); // 저장
        return redirect()->route('post.create')->with('message', '포스트를 발행했습니다.'); // 저장이 끝나면 post.create 화면으로 이동
        // return back(); 이전 화면으로 이동하라는 뜻으로 이 코드를 써도 된다.
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
