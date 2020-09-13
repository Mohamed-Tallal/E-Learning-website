
@extends('Admin.layout')


@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <center>
                <h2>Messages Content</h2>
            </center>
        </div>

                    <div class="card">
                        <p>
                        Name :    {{$contact_us->name}}
                        </p>
                    </div>
                    <div class="card">
                        <p>
                        Email  :  {{$contact_us->email}}
                        </p>
                    </div>
                    <div class="card">
                        <p>
                        Subject :   {{$contact_us->subject}}
                        </p>
                    </div>

                    <div class="card">
                        <p>
                         Message :    {{$contact_us->message}}
                        </p>
                    </div>
        </div>
    <!--main container end-->

@endsection
