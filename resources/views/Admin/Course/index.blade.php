
@extends('Admin.layout')


@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <div id="NameHeade">
                <h2>Course Details</h2>
            </div>
            <div>
                <a id="ButtonStyle" href="{{route('Course-page.create')}}"> Add a New Course </a>
            </div>
        </div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Category</th>
                    <th>Trainer</th>
                    <th>Small description</th>
                    <th>Control</th>
                </tr>
                @php
                    $i = 1;
                @endphp
                @foreach($courses as $course)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$course->name}}</td>
                        <td ><img width="80" src="{{asset('Front/uploads/courses/'.$course->img)}}"></td>
                        <td>{{$course->smail_des}}</td>
                        <td>{{$course->trainer->name}}</td>
                        <td>{{$course->category->name}}</td>
                        <td>
                            <a  href="{{route('Course-page.edit',$course->id)}}">  <i class="fas fa-pencil-alt"></i></a>
                            <form method="post" action="{{route('Course-page.destroy',$course->id)}}">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" id="style_button" >  <i class="fas fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <center>{!! $courses->render() !!}</center><br><br>
    </div>
    <!--main container end-->

@endsection
