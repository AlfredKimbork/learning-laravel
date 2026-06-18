<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coaches | Network</title>
</head>
<body>
  <h2>currently available coaches</h2>

  @if($greeting === "hello")
    <p>hello to inside the if</p>
  @else
    <p>{{ $greeting }} from inside the else</p>
  @endif

  <ul>
    @foreach ($coaches as $coach)
      <li>
        <p>{{ $coach["name"] }}</p>
        <a href="/coaches/{{ $coach["id"] }}">View Details</a>
      </li>
    @endforeach
  </ul>
  
</body>
</html>