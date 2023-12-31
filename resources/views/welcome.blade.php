
<style>
    .home-content{
        height: 80vh;
        background-image: linear-gradient(to bottom, rgba(78, 78, 78, 0.52), rgba(0, 0, 0, 0.863)), url('https://wallpapercave.com/dwp1x/YKCVphS.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .main-title{
        color: white;
        text-align: center;
        padding: 200px 0 0 0;
        font-size: 50px;
    }
    .main-body{
        text-align: center;
        color: white;
        font-size: 25px;
    }
    .book-btn{
        background: transparent;
        border: 1px solid white;
        border-radius: 5px;
        margin: 25px 0;
        padding: 15px 30px; 
        color: white;
        transition: 0.5s;
    }
    .book-btn:hover{
        cursor: pointer;
        color: black;
        background-color: white;
        box-shadow: 10px 10px 8px #383838;
    }
    .sec-content{
        padding: 50px 0;
    }
    .comment-title, .news-title{
        text-align: center;
        font-size: 25px;
    }

</style>

@include('header')

    {{-- <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="main-content">
                    <div class="container text-center main-btns">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3 btn-login">
                                @auth
                                    <a href="{{ url('/home') }}"><button class="login-btn">Home</button></a>
                                @else
                                <div class="btn-group me-2" role="group" aria-label="First group">
                                    <a href="{{ route('login') }}" ><button class="login-btn">Login</button></a>
                                </div>
                                @endauth
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>

            @endif            
        </div> --}}

    <div class="home-content">
        <div class="container">
            <h1 class="main-title">Book here And Travel AnyWhere</h1>
            <h4 class="main-body">You can book a train before 1hour it's departure time <br>

            <a href="{{ url('/login') }}"><button class="book-btn"><i class="fas fa-train"></i> Book A Train</button></a>
        </h4>
        </div>
    </div>

    <div class="sec-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="news-title">
                        Train Routes <br><br>
                    </div>
                    <div class="news-body">
                        @foreach ($train_routes as $train)
                            <div class="row">
                                <div class="col-lg-4">
                                    <b>Train Name</b>
                                </div>
                                <div class="col-lg-4">
                                    <b>Start Staion</b>
                                </div>
                                <div class="col-lg-4">
                                    <b>End Staion</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    {{ $train->train_name }}
                                </div>
                                <div class="col-lg-3">
                                    {{ $train->start_station }}
                                </div>
                                <div class="col-lg-1">
                                    {{ $train->start_time }}
                                </div>
                                <div class="col-lg-3">
                                    {{ $train->end_station }}
                                </div>
                                <div class="col-lg-1">
                                    {{ $train->end_time }}
                                </div>                                
                            </div>
                            <hr>
                        @endforeach
                        <br><br>
                        <center><a href="{{ url('/login') }}"><button class="btn btn-primary">View More Routes</button></a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('footer')

    </body>
</html>
