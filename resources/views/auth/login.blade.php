<x-layout>
  <form action="{{ route('login') }}" method="POST">
    @csrf

    <h2>Log In to your account</h2>

    <label for="email">Email:</label>
    <input 
      type="email"
      name="email"
      value="{{ old('email') }}"
      required
    >

    <label for="password">password:</label>
    <input 
      type="password"
      name="password"
      required
    >

    <button type="submit" class="btn mt-4">Log In</button>

    @if ($errors->any())
      <ul class="px-10 py-2 mt-2 bg-red-100">
        @foreach ($errors->all() as $error)
          <li class="my-2 text-red-500">{{ $error }}</li>
        @endforeach
      </ul>
    @endif
  </form>
</x-layout>