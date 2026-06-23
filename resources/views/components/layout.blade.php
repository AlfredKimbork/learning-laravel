<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Network</title>
  
  @vite('resources/css/app.css')
</head>
<body>
  @if(session('success'))
    <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
      {{ session('success') }}
    </div>
  @endif

  <header>
    <nav>
      <h1><a href="{{ route('coaches.index') }}">Coach Network</a></h1>
      <ul>
        <li>
          <a href="{{ route('coaches.create') }}">Create new coach</a>
        </li>
        <li>
          <a class="btn" href="{{ route('show.login') }}">Login</a>
        </li>
        <li>
          <a class="btn" href="{{ route('show.register') }}">Register</a>
        </li>
        <li>
          <form action="{{ route('logout') }}" method="POST" class="m-0">
            @csrf
            <button class="btn">Logout</button>
          </form>
        </li>
      </ul>
    </nav>
  </header>
  
  <main class="container">
    {{ $slot }}
  </main>

  <footer>
    
  </footer>
</body>
</html>