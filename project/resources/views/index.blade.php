@extends('layout')
@section('title')
@endsection
@section('content')
    <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
        <!--Posts Container-->
        <div class="flex flex-wrap justify-between pt-12 -mx-6">


            @foreach ($postData as $item)
                <div class="w-full md:w-1/3 px-6 mb-12">
                    <div class="flex flex-col h-full bg-white rounded overflow-hidden shadow-lg">
                        <a href="{{ route('postPageId', ['id' => $item->id]) }}"
                            class="flex flex-wrap no-underline hover:no-underline">
                            <img src="{{ asset($item->post_img) }}" class="h-64 w-full rounded-t pb-6">

                            <div class="w-full  font-bold text-xl text-gray-900 px-6">{{ $item->post_name }}
                            </div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                {{ $item->post_about }}
                            </p>
                        </a>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    </div>
    </div>
@endsection
