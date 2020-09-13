
@extends('Admin.layout')


@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <div id="NameHeade">
                <h2>Admin Details</h2>
            </div>
            <div >
                <a id="ButtonStyle" href="{{route('Admin-page.create')}}"> Add a New Admin </a>
            </div>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Control</th>
            </tr>
            @php
                $i = 1;
            @endphp
            @foreach($admins as $admin)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>
                    <td>
                        <a  href="{{route('Category-page.edit',$admin->id)}}">  <i class="fas fa-pencil-alt"></i></a>
                        <form method="post" action="{{route('Category-page.destroy',$admin->id)}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" id="style_button" >  <i class="fas fa-times"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
    <!--main container end-->

@endsection
