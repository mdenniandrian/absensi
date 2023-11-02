<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Absensi Karyawan PT Sugity Creatives</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logosgt1bg.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="manifest" href="__manifest.json">
</head>

<header>
    <html>
<head>
<title>jam digital</title>
<style>
/* style jam digital */
.time-now{
    font-size:30px;
    font-weight:bold;
    text-align:center;
    color:rgb(255, 0, 0);
}
.date-now{
    font-size:15px;
    font-weight:600;
    color:rgb(17, 17, 17);
    text-align:center;
}
.area-datetime{
    margin-top:15px;
    padding:10px;
    width:300px;
    height:auto;
    background-color: rgb(225, 255, 0);
}
</style>
</head>
<body>
<!-- output -->
<center>
    <div class="area-datetime">
        <p class="date-now" id="datenow"></p>
        <p class="time-now" id="timenow"></p>
     </div>
</center>

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script>
    //intital tanggal dan waktu dari id
    var dateDisplay = document.getElementById("datenow");
    var timeDisplay = document.getElementById("timenow");
    //fungsi
    function refreshTime() {
      var dateString = new Date().toLocaleString("id-ID", {timeZone: "Asia/Jakarta"}); //gettime
      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      if (dd < 10) {
        dd = '0' + dd;
      }
      if (mm < 10) {
        mm = '0' + mm;
      }
      var todayy = dd + '/' + mm + '/' + yyyy;
      var formattedString = dateString.replace(",","-");

      dateDisplay.innerHTML = todayy; // date

      var splitarray = new Array();
      splitarray= formattedString.split(" ");
      var splitarraytime = new Array();
      splitarraytime= splitarray[1].split(".");
      timeDisplay.innerHTML = splitarraytime[0]+':'+splitarraytime[1]+':'+splitarraytime[2]; // time
    }
    //panggil ulang otomatis fungsi
    setInterval(refreshTime, 1000);
  </script>
</body>
</html>
</header>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Capsule -->
    <div id="appCapsule" class="pt-0">

        <div class="login-form mt-1">
            <div class="section">
                <img src="{{ asset('assets/img/sample/photo/logosgt.png') }}" alt="image" class="form-image">
            </div>
            <div class="section mt-1">
                <h4>Selamat Datang, silahkan login untuk melakukan absensi ya</h4>
            </div>
            <div class="section mt-1 mb-5">
                <form action="app-pages.html">
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="email" class="form-control" id="email1" placeholder="Email address">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" class="form-control" id="password1" placeholder="Password">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-links mt-2">
                        <div>
                            <a href="page-register.blade.php">Register Now</a>
                        </div>
                        <div><a href="page-forgot-password.html" class="text-muted">Forgot Password?</a></div>
                    </div>

                    <div class="form-button-group">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Log in</button>
                    </div>

                </form>
            </div>

        </div>


    </div>
    <!-- * App Capsule -->



    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/lib/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap-->
    <script src="{{ asset('assets/js/lib/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/bootstrap.min.js') }}"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('assets/js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- jQuery Circle Progress -->
    <script src="{{ asset('assets/js/plugins/jquery-circle-progress/circle-progress.min.js') }}"></script>
    <!-- Base Js File -->
    <script src="{{ asset('assets/js/base.js') }}"></script>


</body>

</html>
