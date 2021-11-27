<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colab</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    

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

   
    
</body>
</html>