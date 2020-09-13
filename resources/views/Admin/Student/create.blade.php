@extends('Admin.layout')

@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <center>
                <h2>Add New Student </h2>
            </center>

            <form action="{{route('Student-page.store')}}" method="post">
                @csrf
                {{method_field('post')}}
                <label for="name">Student name : </label><br>
                <input type="text" id="Category Name" name="name"><br>
                    @error('name')
                    <small style="color: #c82333 !important; ">
                        {{$message}} <br><br>
                    </small>
                    @enderror
                <label for="Email">Student Email : </label><br>
                <input type="email" id="Student Email" name="email"><br>
                    @error('email')
                    <small style="color: #c82333 !important; ">
                        {{$message}} <br><br>
                    </small>
                    @enderror
                <label for="Specialty">Student Specialty : </label><br>
                <input type="text" id="Student Specialty" name="specisalty"><br>
                    @error('specisalty')
                    <small style="color: #c82333 !important; ">
                        {{$message}} <br><br>
                    </small>
                    @enderror
                <input type="submit" value="Submit" >
            </form>
            <!--main container end-->
        </div>
    </div>
    <!--main container end-->

@endsection
