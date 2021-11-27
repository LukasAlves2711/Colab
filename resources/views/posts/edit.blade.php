<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div style="width : 900px; max" class="container max-w-full mx-auto pt-4">

                    <a href="/posts" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
                    rounded hover:shadow">Add</a>

                <form method="POST" action="/posts/{{$post-> id}}">
                    @method('PUT')

                    @csrf 

                        <div class="mb-4">
                            <label class="font-bold text-gray-800" for="title">Title:</label>
                            <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
                            text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title"
                            name="title" value="{{$post->title}}">
                        </div>

                        <div class="mb-4">
                            <label class="font-bold text-gray-800" for="content">Content:</label>
                            <textarea class="h-18 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
                            text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content"
                            name="content">{{$post->content}}</textarea>
                        </div>

                        <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
                        rounded hover:shadow">Update</button>

                        <a href="/posts" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
                        rounded hover:shadow">Cancel</a>

                            <form action="/posts/{{$post->id}">
                                @csrf

                                @method('DELETE')

                                <button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
                                    rounded hover:shadow">Delete</button>

                            </form>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
