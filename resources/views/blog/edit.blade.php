@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-4xl">
            Update Post
        </h1>
    </div>
</div>

@if($errors->any())
<div class="w-4/5 m-auto">
    <ul>
        @foreach($errors->all() as $error)
            <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                {{$error}}
            </li>
        @endforeach
    </ul>
</div>

@endif

<div class="w-4/5 m-auto pt-20">
    <form action="/blog/{{$post->id}}"
    method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('put')

    <input type="text" name="title" id="" value="{{$post->title}}" class="bg-gray-0 block border-b-2 w-full h-20 text-3xl px-5 outline-none">

    <textarea name="description" placeholder="Description..." class="py-20 bg-gray-0 block border-b-2 w-full h-60 text-xl px-5 outline-none">{{$post->description}}</textarea>

    <div class="bg-grey-lighter pt-15">
        <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
            <span class="mt-2 leading-normal text-xl">
                Select a file
            </span>
            <input type="file" name="image" class="hidden">
        </label>
    </div>

    <button type="submit" class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
        Submit
    </button>

    </form>

</div>


@endsection