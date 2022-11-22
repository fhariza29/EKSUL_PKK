<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    {{-- My css --}}
    <link rel="stylesheet" href="{{ asset('assets/about.css') }}">
    <title>About Voly</title>
</head>
<body>
<div class="navbar">
        <div class="right">
            LOGO
        </div>
        <div class="left">
            <tr>
                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
            </tr>
            <tr>
                <a href="">About</a>
            </tr>
        </div>
        <!-- Hero Banner Section -->
<section class="hero-banner  py-5">
    <div class="container">
        <div class="row row align-items-center">
            <div class="col-lg-5 offset-lg-1 order-lg-1">
                <img src="{{asset('assets/img/pattern.png')}}" class="img-fluid" alt="Web Development">
            </div>
            <div class="col-lg-6">
            <h7 class="well1" >Profil ekstrakulikuler</h7> 
                   <h2 class="well">Lorem Ipsum</h2>
                  <h6>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</h6>
            </div>
        </div>
</section>
</body>
</html>