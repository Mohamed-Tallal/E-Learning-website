
@extends('Admin.layout')


@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <div id="NameHeade">
                <h2>Category Details</h2>
            </div>
            <div >
                <a id="ButtonStyle" href="{{route('Category-page.create')}}"> Add a New Category </a>
            </div>
        </div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Control</th>
                </tr>
                @php
                $i = 1;
                @endphp
                @foreach($categories as $category)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a  href="{{route('Category-page.edit',$category->id)}}">  <i class="fas fa-pencil-alt"></i></a>
                       <form method="post" action="{{route('Category-page.destroy',$category->id)}}">
                           @csrf
                           {{method_field('DELETE')}}
                           <button type="submit" id="style_button" >  <i class="fas fa-times"></i></button>
                       </form>
                    </td>
                </tr>
                @endforeach
            </table>

            <center>{!! $categories->render() !!}</center>

        </div>
    </div>
    <!--main container end-->

@endsection
