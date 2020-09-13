@extends('Admin.layout')

@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <center>
                <h2>Update Trainer</h2>
            </center>

            <form action="{{route('Trainer-page.update',$trainers ->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('put')}}
                <label for="name">Trainer name : </label><br>
                <input type="text" id="Trainer Name" value="{{$trainers ->name}}" name="name"><br>
                    @error('name')
                        <small style="color: #c82333 !important; ">
                            {{$message}}<br><br>
                        </small>
                    @enderror
                <label for="Photo">Trainer Photo : </label><br>
                <input type="file" id="Trainer img" value="{{$trainers ->img}}" name="img"><br>
                   
                <label for="phone">Trainer Phone : </label><br>
                <input type="text" id="Trainer phone" value="{{$trainers ->phone}}" name="phone"><br>
                    @error('phone')
                        <small style="color: #c82333 !important; ">
                            {{$message}}<br><br>
                        </small>
                    @enderror
                <label for="Specialty">Trainer Specialty : </label><br>
                <input type="text" id="Trainer Specialty" value="{{$trainers ->specilaty}}" name="specilaty"><br>
                    @error('specilaty')
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
