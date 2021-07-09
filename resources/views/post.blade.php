@extends('components.layout')

@section('content')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <article
            class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
            <div class="py-6 px-5 lg:flex">
                <div class="flex-1 lg:mr-8">
                    <img src="../images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
                </div>

                <div class="flex-1 flex flex-col justify-between">
                    <header class="mt-8 lg:mt-0">
                        <div class="space-x-2">
                            <a href="#"
                               class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">Techniques</a>

                            <a href="#"
                               class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">Updates</a>
                        </div>

                        <div class="mt-4">
                            <h1 class="text-3xl">
                                {!! $post->title !!}
                            </h1>

                            <p>
                                By <a href="#">{{$post->user->name}}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </p>

                            <span class="mt-2 block text-gray-400 text-xs">
                                        Published on <time>{{$post->date}}</time>
                                    </span>
                        </div>
                    </header>

                    <div class="text-sm mt-2">
                        <p>
                            {!! $post->body !!}
                        </p>
                    </div>

                    <footer class="flex justify-between items-center mt-8">
                        <div class="flex items-center text-sm">
                            <img src="../images/lary-avatar.png" alt="Lary avatar">
                            <div class="ml-3">
                                <h5 class="font-bold">Lary Laracore</h5>
                                <h6>Mascot at Laracasts</h6>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </article>

        <br>
        <a href="/"
           class="px-10 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
           style="font-size: 15px">Go Back</a>
    </main>
    @endsection
