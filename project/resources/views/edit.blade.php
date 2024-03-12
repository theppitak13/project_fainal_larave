@extends('layout')
@section('title')
@endsection
@section('content')

    <form action="{{ route('updateData',$editData->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl"
            style="background:white;">
            <div class="flex">
                <h3 class="font-bold uppercase text-5xl">Add Post</h1>
            </div>
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                <div>
                    <label class="block text-sm text-gray-600" for="post_name">Name</label>
                    <input name="post_name"
                        class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" value="{{$editData->post_name}}" />
                </div>
                <div>
                    <label class="block text-sm text-gray-600" for="post_about">About</label>
                    <input name="post_about"
                        class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" value="{{$editData->post_about}}" />
                </div>
                <div>
                    <label class="block text-sm text-gray-600" for="post_img">Image</label>
                    <input name="post_img"
                        class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="file" value="{{$editData->post_img}}" />
                </div>
                <div>
                    <label class="block text-sm text-gray-600" for="post_content">Content</label>
                    <input name="post_content"
                        class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" value="{{$editData->post_content}}" />
                </div>
            </div>
            <div class="my-2 w-1/2 lg:w-1/4">
                <button
                    class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
                    Send Message
                </button>
            </div>
        </div>
    </form>

@endsection
