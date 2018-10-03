    @extends('layouts.default')
    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Student List</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('student.create') }}"> Create New Student</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Batch</th>
                <th>Course</th>
                <th>Result</th>
                <th width="280px">Operation</th>
            </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->name}}</td>
            <td>{{ $student->email}}</td>
            <td>{{ $student->contact}}</td>
            <td>{{ $student->batch_id}}</td>
            <td>{{ $student->course_id}}</td>
            <td>{{ $student->result}}</td>
            <td>
                <a class="btn btn-info" href="{{ route('students.show',$member->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('students.edit',$member->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['students.destroy', $student->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </table>
        {!! $students->render() !!}
    @endsection