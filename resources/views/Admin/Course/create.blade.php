@extends('Admin.layout')

@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <center>
                <h2>Add New Course </h2>
            </center>

            <form action="{{route('Course-page.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('post')}}
                <label for="name">Course Name : </label><br>
                <input type="text" id="Course Name" name="name"><br>
                    @error('name')
                        <small style="color: #c82333 !important; ">
                            {{$message}}<br><br>
                        </small>
                    @enderror
               
                <label for="img">Course Photo : </label><br>
                <input type="file" id="Course Photo"  name="img"><br>
                    @error('img')
                        <small style="color: #c82333 !important; ">
                            {{$message}}<br><br>
                        </small>
                    @enderror

                <label for="trainer">Trainer Name : </label><br>
                <select id="Trainer name" name="trainer_id">
                        @foreach($trainer as $trat)
                            <option value="{{$trat->id}}">{{$trat->name}}</option>
                        @endforeach
                </select>

                <label for="Category">Category Name : </label><br>
                <select id="Category Name" name="category_id">
                    @foreach($category as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>

                <label for="Small">Small Description  : </label><br>
                <input type="text" id="Small Description" name="smail_des"><br>
                    @error('smail_des')
                        <small style="color: #c82333 !important; ">
                            {{$message}}<br><br>
                        </small>
                    @enderror
                <label for="Description">Description : </label><br>
                <textarea id="Description" name="describe" ></textarea>
                    @error('describe')
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
