@props(['errors'])

@if ($errors->any())
    <div class="font-medium text-red-600">
        에러의 내용을 확인해 주세요.
        <ul>
            @foreach ($errors->all() as $error)
                <li class="mt-1 list-disc list-inside text-sm text-red-600">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif