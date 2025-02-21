<?php



?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Youdemy</title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<style>
    @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);

    /* Bootstrap Icons */
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
</style>

<body>
<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                <h3 class="text-success"><img src="./img/youdemy-logo.png" width="40"><span class="text-info">YOU</span>DemY</h3> 
            </a>
            <!-- User menu (mobile) -->
            
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./homedashbord.php">
                            <i class="bi bi-house"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./users.php">
                            <i class="bi bi-people"></i> Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-warning" aria-current="page" href="./validation.php">
                            <i class="bi bi-bookmarks"></i> Validation
                        </a>
                    </li>

                   

                </ul>
                <!-- Divider -->
                <hr class="navbar-divider my-5 opacity-20">
               
                <!-- Push content down -->
                <div class="mt-auto"></div>
                <!-- User (md) -->

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-person-square"></i> Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="return confirm('Are you sure you want to logout?')">
                            <i class="bi bi-box-arrow-left"></i> Logout
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">
                                <img src="" width="40"> Welcome Admin</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">
                              
                              
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs mt-4 overflow-x border-0">
                      
                     
                    </ul>
                </div>
            </div>
        </header>
        <!-- Main -->
        <section class="py-6 bg-surface-secondary">
            <div class="container-fluid">
              <!-- Card stats -->
  
              <div class="card shadow border-0 mb-7">
                <div class="card-header">
                  <h5 class="mb-0">Applications</h5>
                </div>
                <div class="table-responsive">
                  <table class="table table-hover table-nowrap">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">offre Name</th>
                        <th scope="col">offre Description</th>
                        <th scope="col">Competence</th>
                        <th scope="col">Categorie</th>
                        <th scope="col">Client Name</th>
                        
                        <th scope="col"></th>
                        <th scope="col " class="text-center">Validation</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <!--  -->
  
                      <tr>
                        <td>
                          <a class="text-heading font-semibold" href="#"> 1 </a>
                        </td>
  
                        <td>
                          <a class="text-heading font-semibold"> ""offrename"" </a>
                        </td>
  
                        <td>
                          <a class="text-heading font-semibold"> "offre description " </a>
                        </td>
  
                        <td>
                          <a class="text-heading font-semibold">
                            php js java
                          </a>
                        </td>
                        <td>
                          <a class="text-heading font-semibold"> developemnt </a>
                        </td>
                        <td>
                          <a class="text-heading font-semibold"> @Kardash </a>
                        </td>
                        <td>
                          <a class="text-heading font-semibold"> </a>
                        </td>
  
                        <td class="text-end">
                          <a
                            href="#"
                            class="btn d-inline-flex btn-sm btn-success mx-1"
                          >
                            <span class="pe-2">
                             
                            </span>
                            Valide
                          </a>
                          <a>
                            <button
                              type="button"
                              onclick="showSweetAlert()"
                              class="btn d-inline-flex btn-sm btn-danger mx-1"
                            >
                              reject</button
  
                          ></a>
                        </td>
                      </tr>
  
                    </tbody>
                  </table>
                </div>
               
              </div>
            </div>
          </section>



    </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>
</html>
