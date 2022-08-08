<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .navbar { background-color: #white; }
        .navbar .navbar-nav .nav-link { color: #fff; }
        .navbar .navbar-nav .nav-link:hover { color: #fbc531; }
        .navbar .navbar-nav .active > .nav-link { color: #fbc531; }
        .heading{
          padding: 0;
  margin: 0;
  background-color: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}
h1 {
  color: hsl(0, 0%, 28%);
  font-size: 50px;
  font-weight: bold;
  font-family: monospace;
  letter-spacing: 7px;
  cursor: pointer;
}

h1 span {
  transition: 0.5s ease-out;
}
h1:hover span:nth-child(1) {
  margin-right: 5px;
}
h1:hover span:nth-child(1):after {
  content: "'";
}
h1:hover span:nth-child(2) {
  margin-left: 30px;
}
h1:hover span {
  color: #fff;
  text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 40px #fff;
        }
       
    </style>
     
    <title>Document</title>
</head>
<body>
    

</body>
</html>

<!-- <nav class="Heading">
<h1 class="text-center text-dark  my-5 fw-bold"><span>WELCOME</span> TO OUR <span>WEBSITE</span></h1>
</nav> -->

<div class="section-title center-block text-center">
  <h3 class="text-primary font-weight text-center my-5 fw-bold">Latest Job</h3>
</div>
<!--  
<nav>
<div class="panel panel-primary">
            <div class>
                <div class="tabs-menu">
                    <ul class="nav mb-6 d-flex justify-content-center mt-4">
                        <li class>
                            <a href="#All" class=" list-group-item 
                            list-group-item-action active 
                            border boder-4 rounded-pill mr-4 p-3 text-center text-dark text-decoration-none"style="width:130px " data-toggle="tab">All</a>
                        </li>
                        <li class>
                            <a href="#Premuim" class=" list-group-item 
                            list-group-item-action 
                            border boder-4 rounded-pill  mr-4 p-3 text-center text-dark text-decoration-none"style="width:130px " data-toggle="tab">Premuim</a>
                        </li>
                        <li class>
                            <a href="#Normal" class=" list-group-item 
                            list-group-item-action
                            border boder-4 rounded-pill  mr-4 p-3 text-center text-dark text-decoration-none"style="width:130px " data-toggle="tab">Normal</a>
                        </li>
                    </ul>
                </div>
            </div>
</nav> -->
<nav>
<div class="container">
  <div class="row gy-3 my-5">
    <div class="col-sm-6 col-md-4 col-lg-3 my-4">
    <div class="card" style="width: 17rem;">
     <img src="{{asset('storage/img1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Various Position</h5>
    <p class="card-text">TVC Engineering Co,Ltd</p>
    <a href="#" class="btn btn-primary">Urgent</a>
    </div>
    </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 my-4">
    <div class="card" style="width: 17rem;">
     <img src="{{asset('storage/img1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Various Position</h5>
    <p class="card-text">Home Window rise and shine</p>
    <a href="#" class="btn btn-primary">Urgent</a>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 my-4">
    <div class="card" style="width: 17rem;">
     <img src="{{asset('storage/img1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Various Position</h5>
    <p class="card-text">Home Window rise and shine</p>
    <a href="#" class="btn btn-primary">Urgent</a>
    </div>
    </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 my-4">
    <div class="card" style="width: 17rem;">
     <img src="{{asset('storage/img1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Various Position</h5>
    <p class="card-text">TVC Engineering Co,Ltd</p>
    <a href="#" class="btn btn-primary">Urgent</a>
    </div>
    </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 my-4">
    <div class="card" style="width: 17rem;">
     <img src="{{asset('storage/img1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Various Position</h5>
    <p class="card-text">TVC Engineering Co,Ltd</p>
    <a href="#" class="btn btn-primary">Urgent</a>
    </div>
    </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 my-4">
    <div class="card" style="width: 17rem;">
     <img src="{{asset('storage/img1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Various Position</h5>
    <p class="card-text">TVC Engineering Co,Ltd</p>
    <a href="#" class="btn btn-primary">Urgent</a>
    </div>
    </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 my-4">
    <div class="card" style="width: 17rem;">
     <img src="{{asset('storage/img1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Various Position</h5>
    <p class="card-text">TVC Engineering Co,Ltd</p>
    <a href="#" class="btn btn-primary">Urgent</a>
    </div>
    </div>
    </div>

    <div class=" col-sm-6 col-md-4 col-lg-3 my-4">
    <div class="card" style="width: 17rem;">
     <img src="{{asset('storage/img1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Various Position</h5>
    <p class="card-text">TVC Engineering Co,Ltd</p>
    <a href="#" class="btn btn-primary">Urgent</a>
    </div>
    </div>
    </div>
  </div>
</div>
</nav>
