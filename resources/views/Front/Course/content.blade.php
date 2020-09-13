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
                            <p>Home<span>/</span>Course<span>/</span>{{$course->name}}</p>
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
                        <img class="img-fluid" src="{{asset('Front/uploads/courses/'.$course->img)}}" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">Description</h4>
                        <div class="content">
                           {!! $course->describe !!}
                        </div>

                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Trainer’s Name</p>
                                    <span>{{$course->trainer->name}}</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Category </p>
                                    <span>{{$course->category->name}}</span>
                                </a>
                            </li>
                        </ul>
                        <a href="{{route('course.video',['id'=>$course->id,'video'=>$video])}}" class="btn_1 d-block">Show Course</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->


@endsection
