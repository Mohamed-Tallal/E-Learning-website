@extends('Admin.layout')

@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <center>
                <h2>Update Category </h2>
            </center>

            <form action="{{route('Category-page.update',$category->id)}}" method="post">
                @csrf
                {{method_field('put')}}
                <label for="fname">Category name : </label><br>
                <input type="text" id="Category Name" value="{{$category->name}}" name="name"><br>
                @error('name')
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
