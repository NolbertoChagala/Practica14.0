    <link rel="stylesheet" href="{{ asset("css/students.css") }}">
    <h1>Lista de Estudiantes</h1>
    @if (session()->has('notificacion'))
    <div style="color:green">
        {{session('notificacion')}}
    </div>
    @endif
    <table>
    @foreach ($students as $student)
    <tr>
        <td>{{$student->id_student}}</td>
        <td>{{$student->name_student}}</td>
        <td>{{$student->lastname_student}}</td>
        <td>
            <a href="{{route('estudiantes.show',$student->id)}}">Detalles</a>
            <a href="{{route('estudiantes.edit',$student->id)}}">Editar</a>
        </td>
    </tr>
    @endforeach
</table>
{{$students->links()}}
