
@extends('Admin.layout')


@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <center>
                <h2>Messages Details</h2>
            </center>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Control</th>
                </tr>
                @php
                    $i = 1;
                @endphp
                @foreach($contact_us as $contact)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->subject}}</td>
                        <td>{{$contact->message}}</td>

                        <td>
                            <a  href="{{route('Contact-page.edit',$contact->id)}}">  <i class="fab fa-readme"></i></a>
                            <form method="post" action="{{route('Contact-page.destroy',$contact->id)}}">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" id="style_button" >  <i class="fas fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

            <center>{!! $contact_us->render() !!}</center>


        </div>
    </div>
    <!--main container end-->

@endsection
