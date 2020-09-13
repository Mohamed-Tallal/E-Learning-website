@extends('Admin.layout')

@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <center>
                <h2>Update Video </h2>
            </center>

            <form action="{{route('Video-page.update',$videos->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('put')}}
                <label for="name">Video Name : </label><br>
                <input type="text" id="Trainer name" value="{{$videos->name}}" name="name"><br>
                @error('name')
                <small style="color: #c82333 !important; ">
                    {{$message}}<br><br>
                </small>
                @enderror
                <label for="url">Video Url Key : </label><br>
                <input type="text" id="Video Url Key" value="{{$videos->urlVideo}}" name="urlVideo"><br>
                @error('urlVideo')
                <small style="color: #c82333 !important; ">
                    {{$message}}<br><br>
                </small>
                @enderror
                <label for="Course">Course Name : </label><br>
                <select id="Course Name" name="course_id">
                    @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                </select>
                <label for="Description">Description : </label><br>
                <textarea id="Description" name="descripe" >{{$videos->descripe}}</textarea>
                    @error('descripe')
                        <small style="color: #c82333 !important; ">
                            {{$message}}<br><br>
                        </small>
                    @enderror
                <input type="submit" value="Submit" >
            </form>

            <!--main container end-->

        </div>
    </div>
    <!--main container end-->

@endsection
