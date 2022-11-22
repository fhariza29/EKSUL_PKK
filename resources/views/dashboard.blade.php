<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    {{-- My css --}}
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <title>LANDING PAGE</title>
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
        
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Log-In</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="mbody-desc">
            <div class="form-group">
              <input type="email" class="form-control" id="email1"placeholder="Your email address...">
            </div>
            <br>
            <div class="form-group">
              <input type="password" class="form-control" id="password1" placeholder="Your password...">
            </div>
                </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Login</button>
                </div>
              </div>
            </div>
          </div>
    <!-- Hero Banner Section -->
<section class="hero-banner  py-5">
    <div class="container">
        <div class="row row align-items-center">
            <div class="col-lg-5 offset-lg-1 order-lg-1">
                <img src="{{asset('assets/img/pattern.png')}}" class="img-fluid" alt="Web Development">
            </div>
            <div class="col-lg-6">
            <h2 class="well" style="font: bold;" >Ekstrakulikuler</h2> 
                   <h2 class="well">SMKN 1 Sumedang</h2>
                  <h6>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</h6>
            </div>
        </div>
        <div class="lorem">
            <div class="konten">
                <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries por previewing layouts and visual mockups</p>
            </div>
        </div>
            <div class="garis"></div>
        <div class="loremdua">
            <div class="left">
                <div class="kontensatu">
                    <h5>Lorem</h5>
                </div>
                <div class="kontendua">
                    <h2>Lorem Ipsum Dolor Sit Amet</h2>
                </div>
            </div>
            <div class="right">
                <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
            </div>
        </div>
    </div>
    <div class="susunan"> 



     <div class="card">
        
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
            <div class="buleud">
                <title></title>
            </div>
            <div class="keurdescription">
                <div class="fornama">
                    <label for=""></label>
                    <span> paras</span>
                </div>
                
                 <div class="keurnama">
                 <span>Lorem ipsum is placeholder text commonly used in the graphic,</span>
                </div> 
            </div>
            
        </div>
        
    </div> 
    <div class="card">
        
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
            <div class="buleud">
                <title></title>
            </div>
            <div class="keurdescription">
                <div class="fornama">
                    <label for=""></label>
                    <span> paras</span>
                </div>
                
                 <div class="keurnama">
                 <span>Lorem ipsum is placeholder text commonly used in the graphic,</span>
                </div> 
            </div>
            
        </div>
        
    </div> 
    <div class="card">
        
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
            <div class="buleud">
                <title></title>
            </div>
            <div class="keurdescription">
                <div class="fornama">
                    <label for=""></label>
                    <span> paras</span>
                </div>
                
                 <div class="keurnama">
                 <span>Lorem ipsum is placeholder text commonly used in the graphic,</span>
                </div> 
            </div>
            
        </div>
        
    </div> 
    <div class="card">
        
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" >
            </div>
            <div class="buleud">
                <title></title>
            </div>
            <div class="keurdescription">
                <div class="fornama">
                    <label for=""></label>
                    <span> paras</span>
                </div>
                
                 <div class="keurnama">
                    <span>Lorem ipsum is placeholder text commonly used in the graphic,</span>
                </div> 
            </div>
        </div>
        </div> 


    <!-- <div class="row">
        <div class="col-md-12">
            <div class="row"> -->
                
                
                
            
    </div>
            <button class="buttons" type="submit" name="submit" >View All</button>   
        </div>
        
    </div>
    
 </div> 
</div>
</section>
<div class="content">
<div class="section3">
<div class="isisection3">
            <div class="isi3">
                <div class="fitur">
                    <h5>Features</h5>
                </div>
                <div class="deskripsi">
                    <h2>Lorem Ipsum Dolor Sit Amet Is Placeholder</h2>
                    <span>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="motivasi">
    <div class="left">
    <div class="kontensatu">
                    <h5>Lorem</h5>
                </div>
                <div class="kontendua">
                    <h2>Lorem Ipsum Dolor Sit Amet</h2>
                </div>
                <div class="parag">
                    <p style="width: 450px;">Lorem ipsum is placeholder text commonly used in the graphic lorem ipsum is placeholder text commonly used in the graphic orem ipsum is placeholder text commonly used in the graphic. Lorem ipsum is placeholder text commonly used in the graphic lorem ipsum is placeholder text commonly used in the graphic orem ipsum is placeholder text commonly used in the graphic</p>
                </div>
    </div>
    <div class="right">
        <div class="konten">
            <div class="background"></div>
            <div class="imagefirst"></div>
        </div>
    </div>


</div>

<div class="lastkonten">
    <div class="header">
        <center>
        <h6>BLOG</h6>
        <h1>Stay updated with our latest news</h1>
        </center>
    
        <div class="susunan"> 
    <div class="cardlast">
        
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
            <div class="buleud">
                <title></title>
            </div>
            <div class="keurdescription1">
                <div class="fornama1">
                    <label for=""></label>
                    <span> Lorem</span>
                </div>
                <div class="keurjudul">
                    <h6>Lorem ipsum dolor sit amet</h6>
                </div>
                
                 <div class="keurnama1">
                 <span>Lorem ipsum is placeholder text commonly used in the graphic,</span>
                </div> 
            </div>
            
        </div>
        
    </div> 
    <div class="cardlast">
        
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
            <div class="buleud">
                <title></title>
            </div>
            <div class="keurdescription1">
                <div class="fornama1">
                    <label for=""></label>
                    <span> Lorem</span>
                </div>
                <div class="keurjudul">
                    <h6>Lorem ipsum dolor sit amet</h6>
                </div>
                
                 <div class="keurnama1">
                 <span>Lorem ipsum is placeholder text commonly used in the graphic,</span>
                </div> 
            </div>
            
        </div>
        
    </div> 
    <div class="cardlast">
        
        <div class="eusi">
            <div class="keurgambar">
                <img src="{{asset('assets/img/Profil.png')}}" alt="" width=225 height="195">
            </div>
            <div class="buleud">
                <title></title>
            </div>
            <div class="keurdescription1">
                <div class="fornama1">
                    <label for="">Lorem</label>
                    <span></span>
                </div>
                <div class="keurjudul">
                    <h6>Lorem ipsum dolor sit amet</h6>
                </div>
                
                 <div class="keurnama1">
                 <span>Lorem ipsum is placeholder text commonly used in the graphic,</span>
                </div> 
            </div>
            </div>
        </div>
</div>
    </div> 
</div>

</div>

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  
</body>
</html>