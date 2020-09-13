@extends('Admin.layout')

@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <center>
                <h2>Update Student </h2>
            </center>

            <form action="{{route('Student-page.update',$students->id)}}" method="post">
                @csrf
                {{method_field('put')}}
                <label for="name">Student name : </label><br>
                <input type="text" id="Student name" value="{{$students->name}}" name="name"><br>
                    @error('name')
                    <small style="color: #c82333 !important; ">
                        {{$message}}<br><br>
                    </small>
                    @enderror
                <label for="fname">Student email : </label><br>
                <input type="email" id="Student Name" value="{{$students->email}}" name="email"><br>
                    @error('email')
                    <small style="color: #c82333 !important; ">
                        {{$message}}<br><br>
                    </small>
                    @enderror
                <label for="specialty">Student Specialty : </label><br>
                <input type="text" id="Category Name" value="{{$students->specisalty}}" name="specisalty"><br>
                    @error('specisalty')
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
