<x-layout>
  <form action="" method>
    @csrf
    
    <h2>Create new Coach</h2>

    <label for="name">Coach name:</label>
    <input 
      type="text"
      id="name"
      name="name"
      required
    >

    <label for="experience">Coaching experience:</label>
    <input 
      type="number" 
      name="experience" 
      id="experience"
      required
    >

    <label for="bio">Biography:</label>
    <textarea 
      rows="5"
      name="bio" 
      id="bio"
      required
    ></textarea>

    <label for="agency">Agaency:</label>
    <select name="agency" id="agency">
      <option value="" disabled selected>Select an agency</option>
      @foreach ($agencies as $agency)
        <option value="{{ $agency->id }}">
          {{$agency->name}}
        </option>
      @endforeach
    </select>

    <button type="submit" class="btn mt-4">Create coach</button>
  </form>
</x-layout>