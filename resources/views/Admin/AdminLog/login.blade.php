<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="{{asset('Front/css/bootstrap.min.css')}}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In </title>
</head>
<body>

    <div class="container m-5 p-5">
        <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-6">
                     <div class="card">
                         <h4 class="card-header text-center">
                            Log in 
                            </h4>
                            <div class="card-body">
                                    <form action="{{route('admin.PostLogin')}}" method="post" >
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                            </div>    
                        </div>        
                    </div>
                <div class="col-lg-2">
                </div>
        </div>    
    </div>



    <script src="{{asset('Front/js/jquery-1.12.1.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('Front/js/bootstrap.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('Front/js/popper.min.js')}}"></script>
</body>
</html>
