<x-layout>
  <h2>{{ $coach -> name }}</h2>

  <div class="bg-gray-200 p-4 rounded">
    <p><strong>Experience:</strong> {{ $coach -> experience}}</p>
    <p><strong>About me:</strong></p>
    <p>{{ $coach -> bio}}</p>
  </div>

  <div class="bg-white px-4 pb-4 pt-1 my-4 rounded">
    <h3>Agency information</h3>
    <p><strong>Agency name:</strong> {{ $coach->agency->name }}</p>
    <p><strong>Location:</strong> {{ $coach->agency->location }}</p>
    <p><strong>about the Agency:</strong></p>
    <p>{{ $coach->agency->description }}</p>
  </div>

  <form action="{{ route('coaches.destroy', $coach->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn my-4">Delete Coach</button>
  </form>

</x-layout>