@extends('layout')
@section('title')
@endsection
@section('content')
    <div class="bg-white font-sans leading-normal tracking-normal">

        <!--image-->
        <div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
            style="background-image:url('{{ asset($postId->post_img) }}'); height: 75vh;"></div>

        <!--Container-->
        <div class="container max-w-5xl mx-auto -mt-32">

            <div class="mx-0 sm:mx-6">

                <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal"
                    style="font-family:Georgia,serif;">
                    <p class="text-2xl md:text-3xl mb-5">
                        {{ $postId->post_name }}
                    </p>
                    <p class="py-6">{{ $postId->post_content }}</p>
                </div>


            </div>

        </div>


    </div>
    </div>
    </div>
@endsection
