<x-layout>
  <form action="{{ route('coaches.store') }}" method="POST">
    @csrf

    <h2>Create new Coach</h2>

    <label for="name">Coach name:</label>
    <input 
      type="text"
      id="name"
      name="name"
      value="{{ old('name') }}"
      required
    >
      
    <label for="experience">Coaching experience:</label>
    <input 
      type="number" 
      name="experience" 
      id="experience"
      value="{{ old('experience') }}"
      required
    >
      
    <label for="bio">Biography:</label>
    <textarea 
      rows="5"
      name="bio" 
      id="bio"
      required
    >{{ old('bio') }}</textarea>

    <label for="agency_id">Agency:</label>
    <select name="agency_id" id="agency_id">
      <option value="" disabled selected>Select an agency</option>
      @foreach ($agencies as $agency)
        <option value="{{ $agency->id }}" {{ $agency->id == old('agency_id') ? 'selected' : '' }}>
          {{$agency->name}}
        </option>
      @endforeach
    </select>

    <button type="submit" class="btn mt-4">Create coach</button>

    @if ($errors->any())
      <ul class="px-10 py-2 bg-red-100">
        @foreach ($errors->all() as $error)
          <li class="my-2 text-red-500">{{ $error }}</li>
        @endforeach
      </ul>
    @endif
  </form>
</x-layout>