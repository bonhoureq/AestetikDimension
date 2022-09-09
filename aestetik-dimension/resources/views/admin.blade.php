@extends('layout/layout')
<!DOCTYPE html>
<html>
    <head>
        <link href="css/admin.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Permanent+Marker&display=swap"rel="stylesheet"/>
        <link href="https://fontmeme.com/permalink/211202/82e342225bab753968e40773491983df.png"  rel="icon" />
        <title>Aestetik Dimension</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap');
        </style>
    </head>

    <body>

        @section('content')

        <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
            <source src="mp4/Fast moving tunnel,sci-fi, uhd, 60fps, light, neon background-4K Motion Graphics Animated Background.mp4" type="video/mp4">
        </video>

        <section class="encadrement">
        <form action="{{Route('sendadmin')}}" method="POST" enctype="multipart/form-data" class="champ">
            @csrf
            <h1 class="title">Admin Menu</h1>

            <input type="text" name="category" placeholder="Category">

            <input type="text" name="name" placeholder="Name">

            <input type="file" name="image" placeholder="Image">

            <textarea name="description" placeholder="Description"></textarea>

            <input type="number" name="price" placeholder="Price">

            <input type="number" name="quantity" placeholder="Stock">

            <input type="submit" value="Add Product To the Dimension">
        </form>
        </section>

        @endsection

    </body>

</html>
