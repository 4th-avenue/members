<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            포스트 일람
        </h2>
        
        <x-message :message="session('message')" />

    </x-slot>

    {{-- 포스트 일람 표시용 코드 --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{$user->name}}님, 반갑습니다!
        @foreach ($posts as $post) <!-- PostController.php의 index 메소드에서 만든 $posts 안의 데이터들을 $post로 따로 따로 나눈다. -->
            <div class="mx-4 sm:p-8">
                <div class="mt-4">
                    <div class="bg-white w-full rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                        <div class="mt-4">
                            <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"><a href="{{route('post.show', $post)}}">{{$post->title}}</a></h1>
                            <hr class="w-full">
                            <p class="mt-4 text-gray-600 py-4">{{$post->body}}</p>
                            <div class="text-sm font-semibold flex flex-row-reverse">
                                <p>{{$post->user->name}}・{{$post->created_at->diffForHumans()}}</p> <!-- $post->user->name ← 이와 같이 posts 테이블에는 존재하지 않는 (users 테이블에 존재하는) name의 값을 가져올 수 있는 이유는 "07. docker Laravel 릴레이션 설정과 ..."에서 Post 모델과 User 모델을 연결해주었기 때문이다. 그리고 diffForHumans() 함수는 글의 작성 시간을 표시할 때, 마치 유튜브처럼 작성한지 시간이 얼마나 흐른 글인지를 표시해준다. 혹시 평범하게 '○○○○년 ○○월 ○○일' 같은 형식으로 표시하고 싶다면, $post->created_at->format("Y년 m월 d일"); 이런 식으로 하면 된다. -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>