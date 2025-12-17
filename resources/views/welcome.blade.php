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
        <h2 class="text-red-500">Hello</h2>
        <a href="/create" class="bg-green-500 p-4 rounded hover:bg-yellow-300 hover:text-black ">Add new Post</a>
    </div>
</body>
</html>