@extends('Admin.layout')

@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <center>
                <h2>Add New Admin </h2>
            </center>
            <form action="{{route('Admin-page.store')}}" method="post">
                @csrf
                {{method_field('post')}}
                <label for="fname">Admin name : </label><br>
                <input type="text" id="Category Name" name="name"><br>
                    @error('name')
                        <small style="color: #c82333 !important; ">
                            {{$message}}
                        </small>
                    @enderror
                <label for="fname">email : </label><br>
                <input type="text" id="Category Name" name="email"><br>
                @error('email')
                <small style="color: #c82333 !important; ">
                    {{$message}}
                </small>
                @enderror<label for="fname">password : </label><br>
                <input type="password" id="Category Name" name="password"><br>
                @error('password')
                <small style="color: #c82333 !important; ">
                    {{$message}}
                </small>
                @enderror

                <input type="submit" value="Submit" >
            </form>

            <!--main container end-->

        </div>
    </div>
    <!--main container end-->

@endsection
