@extends('Admin.layout')

@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <center>
                <h2>Add New Category </h2>
            </center>
                        <form action="{{route('Category-page.store')}}" method="post">
                            @csrf
                            {{method_field('post')}}
                            <label for="fname">Category name : </label><br>
                            <input type="text" id="Category Name" name="name"><br>
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
