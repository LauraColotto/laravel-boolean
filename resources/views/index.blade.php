<table>
    @foreach ($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->lastname}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->github}}</td>
        </tr>
        
    @endforeach
</table>