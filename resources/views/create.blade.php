<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
      .container{
        @apply px-10 mx-auto
      }
    </style>
</head>
<body>
  <div class="container py-5 flex justify-between">
        <div>
            <h2 class="text-red-500">Create</h2>
             <form  method="POST" action="{{route('store')}}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Enter name">
        </div>

        <br>

        <!-- Description -->
        <div>
            <label for="description">Description</label><br>
            <textarea name="description" id="description" rows="4" placeholder="Enter description"></textarea>
        </div>

        <br>

        <!-- Image -->
        <div>
            <label for="image">Image</label><br>
            <input type="file" name="image" id="image">
        </div>

        <br>

        <!-- Submit -->
        <input type="submit" class="bg-green-400 p-3 px-8 rounded-md"/>
    </form>
        </div>
       <div>
         <a href="/" class="bg-green-500 p-4 rounded hover:bg-yellow-300 hover:text-black ">Back to Home</a>
       </div>
    </div>
</body>
</html>