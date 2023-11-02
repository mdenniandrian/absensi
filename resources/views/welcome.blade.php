<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Layout 1 Kolom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<style>
    .footer{
        margin-bottom: 0px;
        width: 100%;
        height: 30px;
        padding-right: 0px;
        padding-left: 0px;
        bottom: 0px;
        position: fixed;
        align-items: center;
        text-align-last: center;

    }
    .row{
        background: rgb(204, 255, 0);
        size: 100%;
    }
</style>

</head>

<body>
    <header class="container">
        <div class="row1">
            <div class="col-20 py-0 text-center">
                PT Sugity Creatives
            </div>
        </div>
    </header>

    <main class="container border">
        <div class="row">
            <div class="col-md-12 text-blue">
                <h1>Membuat Layout Satu Kolom</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad reprehenderit libero unde ullam ducimus sunt, saepe fugit animi accusamus accusantium excepturi corrupti aut tenetur? Cumque quasi ratione ipsam facere quod?</p>
            </div>
            <!--<div class="text">
                <img src="{{ asset('assets/img/sample/photo/logosgt.png') }}" alt="pt sugity" class="form-image">
            </div>-->
        </div>
    </main>

    <footer class="container">
        <div class="footer">
            <div class="col-12 py-0">
                &copy; 2023 PT Sugity Creatives, All Right Reserved
            </div>
        </div>
    </footer>

</body>

</html>
