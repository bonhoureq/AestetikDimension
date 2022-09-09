@extends('layout/layout')
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="../css/cata.css" rel="stylesheet" type="text/css" >
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fontmeme.com/permalink/211202/82e342225bab753968e40773491983df.png"  rel="icon" />
        <title>Aestetik Dimension</title>
    </head>

    <body>

    @section('content')

    <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
        <source src="../mp4/Video Background Smoke HD (1).mp4" type="video/mp4">
    </video>

    <div class="Grid">
    @foreach($data as $key => $data)

    <figure class="Clothes-Item">
    <img src="{{asset($data->image)}}"><br>
    <div class="price">${{$data->price}}.00</div>
    <figcaption>
        <a class="h3"href="/produit/{{$data->id}}">{{$data->name}}</a>
      <p>
        {{$data->description}}
      </p><a href="/panier">Add to My Flow</a>
    </figcaption>
    </figure>

    @endforeach
    </div>

    @endsection

    </body>

</html>
