
@extends('Admin.layout')


@section('content')

    <!--main container start-->
    <div class="main-container">
            <div class="card">
                <div id="NameHeade">
                    <h2>Trainer Details</h2>
                </div>
                <div>
                    <a id="ButtonStyle" href="{{route('Trainer-page.create')}}"> Add a New Trainer </a>
                </div>
            </div>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Phone</th>
                    <th>Specialty</th>
                    <th>Control</th>
                </tr>
                @php
                    $i = 1;
                @endphp
                @foreach($trainers as $trainer)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$trainer->name}}</td>
                        <td><img width="50" src="{{asset('Front/uploads/trainer/'.$trainer->img)}}"></td>
                        <td>{{$trainer->phone}}</td>
                        <td>{{$trainer->specilaty}}</td>
                        <td>
                            <a  href="{{route('Trainer-page.edit',$trainer->id)}}">  <i class="fas fa-pencil-alt"></i></a>
                            <form method="post" action="{{route('Trainer-page.destroy',$trainer->id)}}">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" id="style_button" >  <i class="fas fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <center>{!! $trainers->render() !!}</center>



        </div>
    </div>
    <!--main container end-->

@endsection
