<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Engineering Support</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
      #header{
    color: rgb(48, 119, 189);
    letter-spacing: 1px;
    font-weight: 600;
}
    </style>
  </head>
  

  <body class="vh-100 overflow-hidden">
    
    <!-- navbar -->
   
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
      <div class="container-lg">

      
        <!-- logo -->
        <a class="navbar-brand fs-1" href="/home_page" id="header">Engineering Helpdesk</a>
       

        <!-- toggle button -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home_page">Home</a>
              </li>                                                           
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Solutions</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/ticket">Tickets</a>
              </li>  
            </ul>
          </div>
        </div>

        <!-- profile -->

        <div class="lead">Welcome User</div>


      </div>
    </nav>


    <!-- intro  -->
    <section id="intro">
      <div class="container-lg">
        <div class="row justify-content-start">

          <div class="col-md-5 text-center text-md-start">

            <!-- text -->
            <h1>
              <p class="display-6">How can we help you today?</p>
              <p class="display-6 fs-">  <h6>How can we help you today?</h6></p>
              <h6 class="fs-3">How can we help you today?</h6>
              <h6>How can we help you today?</h6>
            
            </h1>

            <!-- search bar-->
            
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter your search term here">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
            </div>

            
            <!-- button -->

            <div class="container -lg  my-1 text-start">
              <div class="row">
                <div class="col">

                  <div class="input-group">
                    <button class="btn btn-link px-0" type="button" id="button-addon2"><i class="bi bi-plus-square-fill"></i></button>
                    <a href="/new_ticket" class="btn btn-link link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Create New Ticket</a>
                  </div>

                </div>
                <div class="col">

                  <div class="input-group">
                    <button class="btn btn-link px-0" type="button" id="button-addon2"><i class="bi bi-plus-square-fill"></i></button>
                    <a href="/ticket" class="btn btn-link link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Check Ticket Status</a>
                  </div>

                </div>
            </div>

          </div>



        </div>
      </div>
    </section>


    <!--knowledge base-->

    <!-- bottom -->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

</html>