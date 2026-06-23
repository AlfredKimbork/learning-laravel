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
  </form>
</x-layout>