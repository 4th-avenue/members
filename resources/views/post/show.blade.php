<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            포스트 개별 표시
        </h2>
        
        <x-message :message="session('message')" />

    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            <div class="px-10 mt-4">
                <div class="bg-white w-full rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                    <div class="mt-4">
                        <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">
                            {{$post->title}}
                        </h1>
                        <hr class="w-full">
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="{{route('post.edit', $post)}}">
                            <x-primary-button class="bg-teal-700 float-right">
                                편집
                            </x-primary-button>
                        </a>
                        <form method="POST" action="{{route('post.destroy', $post)}}">
                            @csrf <!-- ① -->
                            @method('delete') <!-- ② -->
                            <x-primary-button class="bg-red-700 float-right ml-4" onClick="return confirm('정말로 삭제하시겠습니까?');">
                                삭제
                            </x-primary-button>
                        </form>
                    </div>
                        <p class="mt-4 text-gray-600 py-4">{{$post->body}}</p>
                        <div>
                            (사진 파일 : {{$post->image}})
                        </div>
                        <img src="{{asset('storage/images/'.$post->image)}}" class="mx-auto" style="height:300px;">
                        <div class="text-sm font-semibold flex flex-row-reverse">
                            <p>{{$post->user->name}}・{{$post->created_at->diffForHumans()}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>