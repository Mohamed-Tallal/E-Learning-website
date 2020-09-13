
@extends('Admin.layout')


@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <div id="NameHeade">
                <h2>Student Details</h2>
            </div>
            <div>
                <a id="ButtonStyle" href="{{route('Student-page.create')}}"> Add a New Student </a>
            </div>
        </div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Specialty</th>
                    <th>Control</th>
                </tr>
                @php
                    $i = 1;
                @endphp
                @foreach($students as $student)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->specisalty}}</td>
                        <td>
                            <a  href="{{route('Student-page.edit',$student->id)}}">  <i class="fas fa-pencil-alt"></i></a>
                            <form method="post" action="{{route('Student-page.destroy',$student->id)}}">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" id="style_button" >  <i class="fas fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <center>{!! $students->render() !!}</center>



        </div>

    <!--main container end-->

@endsection
