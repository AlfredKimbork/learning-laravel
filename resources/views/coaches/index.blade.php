<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coaches | Network</title>
</head>
<body>
  <h2>currently available coaches</h2>
  <p>{{ $greeting }}</p>
  <ul>
    <li>
      <a href="/coaches/{{ $coaches[0]["id"] }}">
        {{ $coaches[0]["name"] }}
      </a>
    </li>
    <li>
      <a href="/coaches/{{ $coaches[1]["id"] }}">
        {{ $coaches[1]["name"] }}
      </a>
    </li>
  </ul>
  
</body>
</html>