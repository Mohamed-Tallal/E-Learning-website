@extends('Front.layout')

@section('content')


    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Course Details</h2>
                            <p>Home<span>/</span>Course Details</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <iframe width="750" height="400" src="https://www.youtube.com/embed/{{ $videoYout->urlVideo}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div class="content_wrapper">
                        <h4 class="title_top">Objectives</h4>
                        <div class="content">
                           {!! $videoYout->descripe !!}
                        </div>

                        
                           
                    </div>
                </div>
                <div class="col-lg-4 right-contents mt-1">
                    <div class="sidebar_top">
                        <ul>

                            @foreach($videos as $video)
                                    <li>
                                        <a class="justify-content-between d-flex" href="{{route('course.video',['id' => $idl ,'video' => $video->id])}}">
                                            <p>{{$video->name}} </p>
                                             <span class="color"> Play Video <i class="fas fa-play-circle"></i> </span>
                                        </a>
                                    </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->

@endsection



