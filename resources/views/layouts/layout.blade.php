<!DOCTYPE html>
<html>
  <head>
    <title>Ikumiのポートフォリオ</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  </head>
  <body>
    <header>
      <h1 class='title'>
        What's Ikumi<i class="fas fa-frog"></i> 
      </h1>
      <nav>
        <ul>
          <li class='titleli'>
            <a href='#prof'>Profile</a>
          </li>
          <li class='titleli'>
            <a href='#app'>App</a>
          </li>
          <li class='titleli'>
            <a href='https://twitter.com/ikumidddd'target="_blank"><i class="fab fa-twitter"></i></a>
          </li>
        </ul>
      </nav>
    </header>
    @yield('main')
  </body>

</html>

