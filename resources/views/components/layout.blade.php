<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Network</title>
  
  @vite('resources/css/app.css')
</head>
<body>

  <header>
    <nav>
      <h1>Network</h1>
      <ul>
        <li>
          <a href="/coaches">All coaches</a>
        </li>
        <li>
          <a href="/coaches/create">Create new coach</a>
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