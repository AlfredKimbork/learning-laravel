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
        <x-card href="/coaches/{{ $coach -> id }}" :highlight="$coach -> experience > 20">
          <h3>{{ $coach -> name }}</h3>
        </x-card>
      </li>
    @endforeach
  </ul>
</x-layout>