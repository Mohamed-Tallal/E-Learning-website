
@extends('Admin.layout')


@section('content')

    <!--main container start-->
    <div class="main-container">
        <div class="card">
            <div id="NameHeade">
                <h2>Video Details</h2>
            </div>
            <div>
                <a id="ButtonStyle" href="{{route('Video-page.create')}}"> Add a New Video </a>
            </div>
        </div>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Video Url </th>
                    <th>Describe</th>
                    <th>Course Name</th>
                    <th>Control</th>
                </tr>
                @php
                $i=1
                @endphp
                @foreach($videos as $video)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$video->name}}</td>
                    <td>
                        <iframe width="100" height="50" src="https://www.youtube.com/embed/{{$video->urlVideo}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </td>
                    <td>{{$video->descripe}}</td>
                    <td>{{$video->course->name}}</td>
                    <td>
                        <a href="{{route('Video-page.edit',$video->id)}}">   <i class="fas fa-pencil-alt"></i></a>
                        <form method="post" action="{{route('Video-page.destroy',$video->id)}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <button id="style_button" type="submit"> <i class="fas fa-times"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <center>{!! $videos->render() !!}</center>


        </div>
    <!--main container end-->

@endsection
