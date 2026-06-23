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
      <h1>Network</h1>
      <ul>
        <li>
          <a href="{{ route('coaches.index') }}">All coaches</a>
        </li>
        <li>
          <a href="{{ route('coaches.create') }}">Create new coach</a>
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