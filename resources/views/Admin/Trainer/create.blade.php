@extends('Admin.layout')

@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <center>
                <h2>Add New Trainer </h2>
            </center>

            <form action="{{route('Trainer-page.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('post')}}
                <label for="name">Trainer Name : </label><br>
                <input type="text" id="Trainer name " name="name"><br>
                    @error('name')
                        <small style="color: #c82333 !important; ">
                            {{$message}} <br><br>
                        </small>
                    @enderror
                <label for="img">Trainer Photo : </label><br>
                <input type="file" id="Trainer Photo" name="img"><br>
                    @error('img')
                        <small style="color: #c82333 !important; ">
                            {{$message}} <br><br>
                        </small>
                    @enderror
                <label for="phone">Trainer Phone : </label><br>
                <input type="text" id="Trainer Phone " name="phone"><br>
                    @error('phone')
                        <small style="color: #c82333 !important; ">
                            {{$message}} <br><br>
                        </small>
                    @enderror
                <label for="specilaty">Trainer Specialty : </label><br>
                <input type="text" id="Trainer Specialty" name="specilaty"><br>
                    @error('specilaty')
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
