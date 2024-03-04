<form action="{{route('estudiantes.update',$student->id)}}" method="POST">
    @csrf
    @method('put')
    <input type="text" name="name_student" placeholder="Nombre" 
    {{-- LE Pasamos el parametro para que rediriga hacia el edit --}}
    value="{{ $student->name_student }}">
    @error('name_student')
        <div class="error">{{ $message }}</div>
    @enderror
    <button type="submit">Editar</button>
</form>