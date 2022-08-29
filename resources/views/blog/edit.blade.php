@extends('layouts.app')
@section('content')
<div class="py-6">

    <div class="w-4/5 m-auto text-left">
        <div class="py-8">
            <h1 class=" text-sm">
                Edit Post
            </h1>
        </div>

        <div class="w-4/5 m-auto pt-10">
            <form action="/blog/{{$post->slug}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" name="title" id="title" value="{{$post->title}}" class=" bg-transparent block border-b-2 w-full h-15 text-4xl outline-none ">

                <textarea name="introduction" id="introduction"  class="bg-transparent py-20 block border-b-2 w-full h-40 text-xl outline-none ">{{$post->introduction}}</textarea>

                <textarea name="paragraph" id="paragraph" placeholder="paragraph..." class="bg-transparent py-20 block border-b-2 w-full h-40 text-xl outline-none ">{{$post->paragraph}}</textarea>

                <textarea name="qoute" id="qoute" placeholder="Qoute..." class="bg-transparent py-20 block border-b-2 w-full h-40 text-xl outline-none ">{{$post->qoute}}</textarea>

                <textarea name="description" id="description" placeholder="Description 1..." class="bg-transparent py-20 block border-b-2 w-full h-40 text-xl outline-none ">{{$post->description}}</textarea>

                <input type="text" name="heading1" id="heading1" value="{{$post->heading1}}" class=" bg-transparent block border-b-2 w-full h-15 text-4xl outline-none ">

                <textarea name="description2" id="description2" placeholder="Description 2..." class="bg-transparent py-20 block border-b-2 w-full h-40 text-xl outline-none ">{{$post->description2}}</textarea>

                <input type="text" name="heading2" id="heading2" value="{{$post->heading2}}" class=" bg-transparent block border-b-2 w-full h-15 text-4xl outline-none ">

                <textarea name="description3" id="description3" placeholder="Description 3..." class="bg-transparent py-20 block border-b-2 w-full h-40 text-xl outline-none ">{{$post->description3}}</textarea>

                <textarea name="conclusion" id="conclusion" placeholder="Conclusion..." class="bg-transparent py-20 block border-b-2 w-full h-40 text-xl outline-none ">{{$post->conclusion}}</textarea>

                <div class="bg-grey-lighter pt-15">
                    <label class=" w-44 flex flex-col items-center px-2 py-3 bg-green shadow-lg tracking-wide uppercase border border-blue-50 cursor-pointer">
                        <span class=" mt-2 text-base leading-normal">
                            Select image
                        </span>
                        <input type="file" name="image" class="hidden">
                    </label>
                </div>


                <button type="submit" class=" uppercase mt-6 bg-blue-500 text-gray-100 text-sm font-extrabold py-4 px-8 rounded-3xl text-right">
                    Update Post
                </button>
            </form>
        </div>
    </div>
</div>

@endsection