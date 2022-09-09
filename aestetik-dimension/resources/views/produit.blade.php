@extends('layout/layout')
<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('css/produit.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fontmeme.com/permalink/211202/82e342225bab753968e40773491983df.png"  rel="icon" />
        <title>Aestetik Dimension</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap');
        </style>
    </head>

    <body>

        @section('content')

        <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
            <source src="../mp4/Video Background Smoke HD (1).mp4" type="video/mp4">
        </video>


        <div>
            <p class="category"><B>Category > {{$data[0]->category}}</B></p>
        </div>

        <div class="frame">

            <img src="{{asset($data[0]->image)}}" class="image">
            <div class="paragraph">
                <h2>{{$data[0]->name}}</h2>
                <h2>Description :</h2>

                <p>{{$data[0]->description}}</p>

                <p><B>Price :</B> {{$data[0]->price}}$</p>
                <p><B>Product stock :</B> {{$data[0]->quantity}}</p>

                <form>
                    <input type="number" name="quantity" placeholder="Quantity">
                    <input type="submit" value="Add To My Flow">
                </form>
            </div>

        </div>

        @endsection

    </body>

</html>
