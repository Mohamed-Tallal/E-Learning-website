@extends('Admin.layout')

@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <center>
                <h2>Add New Video </h2>
            </center>

            <form action="{{route('Video-page.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('post')}}
                <label for="name">Video Name : </label><br>
                <input type="text" id="Trainer name " name="name"><br>
                    @error('name')
                        <small style="color: #c82333 !important; ">
                            {{$message}} <br><br>
                        </small>
                    @enderror
                <label for="url">Video Url Key : </label><br>
                <input type="text" id="Video Url Key" name="urlVideo"><br>
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
                <textarea id="Description" name="descripe" ></textarea>
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
