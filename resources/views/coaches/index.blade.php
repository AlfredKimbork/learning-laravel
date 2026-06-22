<x-layout>
  <h2>currently available coaches</h2>

  <ul>
    @foreach ($coaches as $coach)
      <li>
        <x-card href="{{ route('coach.show', $coach -> id) }}" :highlight="$coach -> experience > 20">
          <h3>{{ $coach -> name }}</h3>
        </x-card>
      </li>
    @endforeach
  </ul>

  {{ $coaches -> links() }}
</x-layout>