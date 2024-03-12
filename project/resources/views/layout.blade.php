<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <style>
        ::-webkit-scrollbar {
            height: 10px;
            width: 10px
        }

        ::-webkit-scrollbar-track {
            background: #3a3a3a;
            border-radius: 6px
        }

        ::-webkit-scrollbar-thumb {
            background: #d5d5d5;
            border-radius: 6px
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #c4c4c4
        }
    </style>
    <style>
        .smooth {
            transition: box-shadow 0.3s ease-in-out;
        }

        ::selection {
            background-color: aliceblue
        }

        :root {
            ::-webkit-scrollbar {
                height: 10px;
                width: 10px;
            }

            ::-webkit-scrollbar-track {
                background: #efefef;
                border-radius: 6px
            }

            ::-webkit-scrollbar-thumb {
                background: #d5d5d5;
                border-radius: 6px
            }

            ::-webkit-scrollbar-thumb:hover {
                background: #c4c4c4
            }
        }

        /*scroll to top*/
        .scroll-top {
            position: fixed;
            z-index: 50;
            padding: 0;
            right: 30px;
            bottom: 100px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(15px);
            height: 46px;
            width: 46px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all .4s ease;
            border: none;
            box-shadow: inset 0 0 0 2px #ccc;
            color: #ccc;
            background-color: #fff;
        }

        .scroll-top.is-active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .scroll-top .icon-tabler-arrow-up {
            position: absolute;
            stroke-width: 2px;
            stroke: #333;
        }

        .scroll-top svg path {
            fill: none;
        }

        .scroll-top svg.progress-circle path {
            stroke: #333;
            stroke-width: 4;
            transition: all .4s ease;
        }

        .scroll-top:hover {
            color: var(--ghost-accent-color);
        }

        .scroll-top:hover .progress-circle path,
        .scroll-top:hover .icon-tabler-arrow-up {
            stroke: var(--ghost-accent-color);
        }
    </style>
</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal">

    <!--Header-->
    <div class="w-full m-0 p-0 bg-cover bg-bottom"
        style="background-image:url('cover.jpg'); height: 60vh; max-height:460px;">
        <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
            <!--Title-->
            <p class="text-white font-extrabold text-3xl md:text-5xl">
                BlogPost
            </p>
            <p class="text-xl md:text-2xl text-gray-500">Welcome to my Blog</p>
        </div>
    </div>

    <!--Container-->
    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">

        <div class="mx-0 sm:mx-6">

            <!--Nav-->
            <nav class="mt-0 w-full">
                <div class="container mx-auto flex items-center">

                    <div class="flex w-1/2 pl-4 text-sm">
                        <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                            <li class="mr-2">
                                <a class="inline-block py-2 px-2 text-white no-underline hover:underline"
                                    href="/">POST</a>
                            </li>
                            <li class="mr-2">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2"
                                    href="/form">Add Post</a>
                            </li>
                            <li class="mr-2">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2"
                                    href="/listpost">List Post</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            @yield('content')


            <footer class="bg-gray-900">
                <div class="container max-w-6xl mx-auto flex items-center px-2 py-8">

                    <div class="w-full mx-auto flex flex-wrap items-center">
                        <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
                            <a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
                                 <span class="text-base text-gray-200">Post Blog Project</span>
                            </a>
                        </div>
                        <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
                            <ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
                                <li>
                                    <a class="inline-block py-2 px-3 text-white no-underline" href="#">Ig</a>
                                </li>
                                <li>
                                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                                        href="#">Facebook</a>
                                </li>
                                <li>
                                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3"
                                        href="#">YouTube</a>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>
            </footer>

            <script src="https://unpkg.com/@popperjs/core@2"></script>
            <script src="https://unpkg.com/tippy.js@6"></script>
            <script>
                //Init tooltips
                tippy('.avatar')

                var h = document.documentElement,
                    b = document.body,
                    st = 'scrollTop',
                    sh = 'scrollHeight',
                    progress = document.querySelector('#progress'),
                    scroll;
                var scrollpos = window.scrollY;
                var header = document.getElementById("header");

                document.addEventListener('scroll', function() {

                    /*Refresh scroll % width*/
                    scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
                    progress.style.setProperty('--scroll', scroll + '%');

                    /*Apply classes for slide in bar*/
                    scrollpos = window.scrollY;

                    if (scrollpos > 100) {
                        header.classList.remove("hidden");
                        header.classList.remove("fadeOutUp");
                        header.classList.add("slideInDown");
                    } else {
                        header.classList.remove("slideInDown");
                        header.classList.add("fadeOutUp");
                        header.classList.add("hidden");
                    }

                });

                // scroll to top	
                const t = document.querySelector(".js-scroll-top");
                if (t) {
                    t.onclick = () => {
                        window.scrollTo({
                            top: 0,
                            behavior: "smooth"
                        })
                    };
                    const e = document.querySelector(".scroll-top path"),
                        o = e.getTotalLength();
                    e.style.transition = e.style.WebkitTransition = "none", e.style.strokeDasharray = `${o} ${o}`, e.style
                        .strokeDashoffset = o, e.getBoundingClientRect(), e.style.transition = e.style.WebkitTransition =
                        "stroke-dashoffset 10ms linear";
                    const n = function() {
                        const t = window.scrollY || window.scrollTopBtn || document.documentElement.scrollTopBtn,
                            n = Math.max(document.body.scrollHeight, document.documentElement.scrollHeight, document.body
                                .offsetHeight, document.documentElement.offsetHeight, document.body.clientHeight, document
                                .documentElement.clientHeight),
                            s = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
                        var l = o - t * o / (n - s);
                        e.style.strokeDashoffset = l
                    };
                    n();
                    const s = 100;
                    window.addEventListener("scroll", (function(e) {
                        n();
                        (window.scrollY || window.scrollTopBtn || document.getElementsByTagName("html")[0]
                            .scrollTopBtn) > s ? t.classList.add("is-active") : t.classList.remove("is-active")
                    }), !1)
                }
            </script>
</body>

</html>
