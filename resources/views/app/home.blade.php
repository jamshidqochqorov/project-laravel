@extends('layouts.app')

@section('content')


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="index.html" class="d-block auth-logo">
                            <img src="assets/images/logo-dark.png" alt="" height="20" class="auth-logo-dark mx-auto">
                            <img src="assets/images/logo-light.png" alt="" height="20" class="auth-logo-light mx-auto">
                        </a>
                        <div class="row justify-content-center mt-5">
                            <div class="col-sm-4">
                                <div class="maintenance-img">
                                    <img src="assets/images/coming-soon.svg" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                        <h4 class="mt-5">Let's get started with Skote</h4>
                        <p class="text-muted">It will be as simple as Occidental in fact it will be Occidental.</p>

                        <div class="row justify-content-center mt-5">
                            <div class="col-md-8">
                                <div data-countdown="2021/12/31" class="counter-number"><div class="coming-box"><p id="day"></p> <span>Days</span></div> <div class="coming-box" ><p id="hour"></p> <span>Hours</span></div> <div class="coming-box" ><p id="min"></p> <span>Minutes</span></div> <div class="coming-box" ><p id="second"></p><span>Seconds</span></div> </div>
                            </div> <!-- end col-->
                        </div> <!-- end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function displayTime(){
            var dateTime = new Date();
            var day = dateTime.getDate()
            var hrs = dateTime.getHours()
            var sec = dateTime.getSeconds()
            var min = dateTime.getMinutes()
            document.getElementById('hour').innerHTML = hrs
            document.getElementById('min').innerHTML = min
            document.getElementById('day').innerHTML = day
            document.getElementById('second').innerHTML = sec
        }
        setInterval(displayTime,10)
    </script>
@endsection()
