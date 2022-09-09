@extends('layout/layout')
<!DOCTYPE html>
<html>
    <head>
        <link href="css/panier.css" rel="stylesheet" type="text/css">
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

        <div class="frame">
        <h1 class="title">My Basket :</h1>

        <table>
            <tr>
                <th><h3>Title Article</h3></th>
                <th><h3>Price</h3></th>
                <th><h3>Quantity</h3></th>
                <th><h3>Delete Article</h3></th>
            </tr>
            <tr>
                <td>Jupe Techwear</td>
                <td>$25.00</td>
                <td><input type="number" name="quantity" placeholder="Quantity"></td>
                <td><input type="button" value="Delete Article"></td>
            </tr>
            <tr>
                <td>Jupe Techwear</td>
                <td>$25.00</td>
                <td><input type="number" name="quantity" placeholder="Quantity"></td>
                <td><input type="button" value="Delete Article"></td>
            </tr>
            <tr>
                <td>Jupe Techwear</td>
                <td>$25.00</td>
                <td><input type="number" name="quantity" placeholder="Quantity"></td>
                <td><input type="button" value="Delete Article"></td>
            </tr>
        </table>

        <table>
            <tr>
                <td><p>Price : $75.00</p><input type="button" value="Go To Purchase"></td>
            </tr>
        </table>

        </div>

    @endsection

    </body>

</html>
