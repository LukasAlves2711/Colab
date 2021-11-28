<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Blocks
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Names 
                    <a href="#" class="bg-blue-500  float:right tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
                    rounded hover:shadow">Add</a>
                </div>


                <table class="w-full">
                    <thead>
                        <tr class="text-center font-bold">
                            <th>Código</th>
                            <th class="border px-6 py-4">names</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blocks as $block)
                        <tr class="text-center font-bold">
                            <th scope='row'>{{$block->id}}</th>
                            <td class="border px-6 py-4">{{$block->name}}</td>
                            <td>
                                <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
                                    rounded hover:shadow">Update</button>
                            </td>
                            <td>
                                 <button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg
                                    rounded hover:shadow">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>