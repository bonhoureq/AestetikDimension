<!DOCTYPE html>
<html>
  <head>
    <link href="css/auth.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Permanent+Marker&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"/>
    <link href="https://fontmeme.com/permalink/211202/82e342225bab753968e40773491983df.png"  rel="icon" />
    <title>Aestetik Dimension</title>
  </head>

  <body>

    <header>

    <div class="Brand">
        <a><img src="https://fontmeme.com/permalink/211028/a30ca902044d4d6aa3ead2b2f1890088.png" alt="police-android-nation" border="0" width="150%"></a>
    </div>
    <video
        id="background-video"
        autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
        <source src="mp4/Blink Portal FX v050.mp4" type="video/mp4" />
    </video>

    </header>

    <section>

      <form action="{{Route('sendlogin')}}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="E-Mail" /><br>
        <input type="password" name="password" placeholder="Password" /><br>
        <input type="submit" value="Enter In This Dimension"/><br>
        <input type=button onclick=window.location.href="/reset"; value="Reset Dimension Password"/><br>
      </form>

    </section>

  </body>

  <script src="app.js"></script>

</html>
