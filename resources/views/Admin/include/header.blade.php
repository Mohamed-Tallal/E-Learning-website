<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('Admin/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>

<!--wrapper start-->
<div class="wrapper">
    <!--header menu start-->
    <div class="header">
        <div class="header-menu">
            <div class="title">Tallal <span>Academy</span></div>
            <div class="sidebar-btn">
                <i class="fas fa-bars"></i>
            </div>
            <ul>
                <li><a href="#"><i class="fas fa-bell"></i></a></li>
                <li><a href="{{route('admin.logout')}}"><i class="fas fa-power-off"></i></a></li>
            </ul>
        </div>
    </div>
    <!--header menu end-->
    <!--sidebar start-->
    <div class="sidebar">
        <div class="sidebar-menu">
            <li class="item">
                <a href="{{route('Admin-page.index')}}" class="menu-btn">
                    <i class="fas fa-user-lock"></i><span>Admin</span>
                </a>
            </li>
            <li class="item">
                <a href="{{route('Trainer-page.index')}}" class="menu-btn">
                    <i class="fas fa-chalkboard-teacher"></i><span>Trainer</span>
                </a>
            </li>
            <li class="item">
                <a href="{{route('Student-page.index')}}" class="menu-btn">
                    <i class="fas fa-user-graduate"></i><span>Student</span>
                </a>
            </li>
            <li class="item">
                <a href="{{route('Course-page.index')}}" class="menu-btn">
                    <i class="fas fa-book-reader"></i><span>Course</span>
                </a>
            </li>
            <li class="item" id="settings">
                <a href="{{route('Video-page.index')}}" class="menu-btn">
                    <i class="fab fa-youtube"></i> <span>Video</span>
                </a>
            </li>
            <li class="item">
                <a href="{{route('Category-page.index')}}" class="menu-btn">
                    <i class="fas fa-window-restore"></i><span>Category</span>
                </a>
            </li>
            <li class="item" id="messages">
                <a href="{{route('Contact-page.index')}}" class="menu-btn">
                    <i class="far fa-envelope"></i><span>Messages</span>
                </a>
            </li>
        </div>
    </div>
    <!--sidebar end-->
