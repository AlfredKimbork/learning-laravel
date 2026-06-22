<x-layout>
  <h2>{{ $coach -> name }}</h2>

  <div class="bg-gray-200 p-4 rounded">
    <p><strong>Experience:</strong> {{ $coach -> experience}}</p>
    <p><strong>About me:</strong></p>
    <p>{{ $coach -> bio}}</p>
  </div>
</x-layout>