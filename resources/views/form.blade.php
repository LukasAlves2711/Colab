<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User registration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div style="width : 900px; max" class="container max-w-full mx-auto pt-4">

                        <form method="POST"  action="blocks" >
                            @csrf 

                            @method('PUT')
                            
                            <div class="mb-4">
                                <label class="font-bold text-gray-800" for="title">Name:</label>
                                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
                                text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                                name="name" >
                            </div>


                            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
                            rounded hover:shadow">Ok</button>

                            <a href="blocks" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
                            rounded hover:shadow">Cancel</a>
                            
                        </form>
                        </div>
                                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>  