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
        $posts=Post::orderBy('created_at', 'desc')->get(); // 데이터베이스의 posts 테이블에 있는 데이터를 날짜 역순으로 가져와서 $posts 안에 넣는다.
        $user=auth()->user(); // 로그인 중인 사용자의 정보를 $user 변수에 넣는다.
        return view('post.index', compact('posts', 'user')); // resources > views > post > index.blade.php 파일을 표시한다. 이때 compact 함수를 사용해서 $posts와 $user의 데이터를 뷰 파일로 가져온다.
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
        $inputs=$request->validate([ // 송신된 데이터에 Validation을 걸어서 $inputs 안에 넣는다는 의미
            'title'=>'required|max:100', // required는 필수 항목이라는 뜻으로 값이 없으면 에러 메시지를 출력
            'body'=>'required|max:1000', // max는 글자수 제한이다. 제한한 글자수를 넘기면 에러
            'image'=>'nullable|image|max:1024', // nullable는 null 값 허용, 1024는 1024KB (1MB)
        ]);

        $post = new Post(); // new 지시자는 새로운 Post 객체를 반환해서 $post에 넣는다.
        $post->title=$request->title; // 입력받은 title을 post의 title에 넣는다.
        $post->body=$request->body;
        $post->user_id=auth()->user()->id; // 로그인 중인 사용자의 id를 post의 user_id에 넣는다.

        if(request('image')){ // 만약 송신된 데이터 안에 사진이 포함되어 있다면
            $original=request()->file('image')->getClientOriginalName();
            $name=date('Ymd_His').'_'.$original;
            request()->file('image')->move('storage/images', $name);
            $post->image=$name;
        }

        $post->save(); // 저장
        return redirect()->route('post.create')->with('message', '포스트를 발행했습니다.'); // 저장이 끝나면 post.create 화면으로 이동
        // return back(); 이전 화면으로 이동하라는 뜻으로 이 코드를 써도 된다.
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
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
