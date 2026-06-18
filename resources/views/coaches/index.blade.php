<x-layout>
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
</x-layout>