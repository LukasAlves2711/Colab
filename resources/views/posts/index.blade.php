<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Colab') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div style="width : 900px; max" class="container max-w-full mx-auto pt-4">

                    <h1 class="text-4x1 font-bold mb-4"> Colab Items</h1>

                    <a href="/posts/create"   class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
                    rounded hover:shadow my-4">Add Product</a>


                    @foreach($posts as $post)
                        <article class="mb-4">


                            <a href="/posts/{{$post->id}}/edit" class="text-xl font-bold text-blue-500">{{$post->title}}</a>

                            <p> {{$post->content}}</p>

                            <hr class="mt-2">

                        </article>
                    @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>