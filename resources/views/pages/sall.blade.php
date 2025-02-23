

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resrvation</title>
  <link rel="stylesheet" href="../../css/app.css">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

</head>
<style>
  @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);

/* Bootstrap Icons */
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");


.product-card {
    transition: all 0.3s ease;
    overflow: hidden;
    cursor: pointer;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.product-image {
    transition: all 0.5s ease;
}

.product-card:hover .product-image {
    transform: scale(1.05);
}

.badge {
    position: absolute;
    top: 10px;
    right: 10px;
}

.price {
    font-size: 1.5rem;
    font-weight: 600;
    color: #6366f1;
}

.btn-custom {
    background: linear-gradient(45deg, #6366f1, #8b5cf6);
    border: none;
    transition: all 0.3s ease;
}

.btn-custom:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(99, 102, 241, 0.4);
}



.suggestion-tag {
    background: rgba(240, 240, 240, 0.9);
    padding: 10px 20px;
    border-radius: 25px;
    font-size: 14px;
    color: #555;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 1px solid #ddd;
}

.suggestion-tag:hover {
    background: #764ba2;
    color: #fff;
    transform: translateY(-3px);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

@media (max-width: 600px) {
    .suggestion-tag {
        font-size: 13px;
        padding: 8px 15px;
    }
}

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
          <h3 class="text-success"><img src="./img/youdemy-logo.png" width="40"><span class="text-info">resr</span>vation</h3>
        </a>
        <!-- User menu (mobile) -->

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">
          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/dashbordadmin">
                    <i class="bi bi-house"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active text-warning" aria-current="page" href="/sall">
                    <i class="bi bi-file-text"></i> sall
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/user">
                    <i class="bi bi-people"></i> Users
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/validation">
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
                  <img src="" width="40" /> Welcome Admin
                </h1>
              </div>
              <!-- Actions -->
              <div class="col-sm-6 col-12 text-sm-end">
                <div class="mx-n1">


                  <a
                    href="#"
                    class="btn d-inline-flex btn-sm btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#creatModal">
                    <span class="pe-2">
                      <i class="bi bi-plus"></i>
                    </span>
                    <span>Create</span>
                  </a>

                </div>
              </div>
            </div>

            <!-- Nav -->
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
            <div class="row justify-content-start">
              <?php foreach ($sall as $salle): ?>
              <div class="col-md-4 p-5">
                  <div class="product-card bg-white rounded-4 shadow-sm h-100 position-relative">
                      <span class="badge bg-danger">New</span>
                      <div class="overflow-hidden">
                          <img src="<?= $salle->photo; ?>" class="product-image w-100" alt="Product">
                      </div>
                      <div class="p-4">
                          <h5 class="fw-bold mb-3"><?= $salle->name; ?></h5>
                          <div class="d-flex align-items-center mb-3">
                              <div class="me-2">
                                  <i class="fas fa-star text-warning"></i>
                                  <i class="fas fa-star text-warning"></i>
                                  <i class="fas fa-star text-warning"></i>
                                  <i class="fas fa-star text-warning"></i>
                                  <i class="fas fa-star-half-alt text-warning"></i>
                              </div>
          
                              <div>
                                  <td>
                                      <a class="text-heading font-semibold"> <?= $salle->location; ?> </a>
                                  </td>
                              </div>
                          </div>
                          <p class="text-muted mb-4"><?= $salle->description; ?></p>
          
                          <div class="d-flex justify-content-between align-items-center">
                              <a href="#" class="btn d-inline-flex btn-sm btn-warning mx-1" data-bs-toggle="modal" data-bs-target="#editCourseModal">
                                  <span class="pe-2">
                                      <i class="bi bi-pencil"></i>
                                  </span>
                                  Edit
                              </a>
          
                              <form action="{{ route('sall.delete', $salle->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE') 
                                <button type="submit" class="btn d-inline-flex btn-sm btn-danger mx-1" >
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                          </div>
                      </div>
                  </div>
              </div>
          <?php endforeach; ?>
          
            </div>
          </div>
        </div>
      </section>

    </div>
  </div>

  <!-- start Modal creat-->
  <div class="modal fade" id="creatModal" tabindex="-1" aria-labelledby="creatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Creat sall</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('sall')}}" enctype="multipart/form-data">
            @csrf  
            <div class="mb-3">
              <label for="name" class="form-label">sall name</label>
              <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <div class="mb-3">
              <label for="courdescription" class="form-label">description</label>
              <input type="text" name="description" class="form-control" id="description" required>
            </div>

            <div class="mb-3">
              <label for="location" class="form-label">location</label>
              <input type="text" name="location" class="form-control" id="location" required>
            </div>

            <div class="mb-3">
              <label>Photo</label>
              <input type="text" name="photo" id="CRedit-photo" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Course Modal -->
  <div class="modal fade" id="editCourseModal" tabindex="-1" aria-labelledby="editCourseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editCourseModalLabel">Edit Course</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="cours.php" enctype="multipart/form-data">
            <input type="hidden" name="id" id="edit-id">
            <div class="mb-3">
              <label for="edit-name" class="form-label">Course Name</label>
              <input type="text" class="form-control" id="edit-name" name="coursname" required>
            </div>
            <div class="mb-3">
              <label for="edit-description" class="form-label">Description</label>
              <input type="text" class="form-control" id="edit-description" name="courdescription" required>
            </div>
            <div class="mb-3">
              <label for="edit-contenu" class="form-label">Content</label>
              <input type="text" class="form-control" id="edit-contenu" name="courcontenu" required>
            </div>
            <div class="mb-3">
              <label for="edit-photo" class="form-label">Photo</label>
              <input type="file" class="form-control" id="edit-photo" name="photo">
            </div>
            <div class="mb-3">
              <label for="edit-categorie" class="form-label">Category</label>
              <select class="form-select" id="edit-categorie" name="courcategorie" required>
                <option value="">Select Category</option>
                <option value="1">Mathimatik</option>
                <option value="2">Informatique</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary" name="update_cour">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>

</html>