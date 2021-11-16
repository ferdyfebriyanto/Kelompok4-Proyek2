<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Sistem Klasifikasi Sampah</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <link rel="stylesheet" href="../assets/css/dragdrop.css">
</head>
<body>
  
  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="#" class="navbar-brand">S<span class="text-primary">K</span>S</a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/galery">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item active">
              <a class="btn btn-primary ml-lg-2" href="/classification">Klasifikasi Sampah</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item active">Sistem Klasifikasi Sampah</li>
              </ul>
            </nav>
            <h1 class="text-center">Sistem Klasifikasi Sampah</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="page-section">
    <!-- <div class="container"> -->
      <!-- <div class="row align-items-center"> -->
        
        <section>
            <form action="" method="POST" enctype="multipart/form-data" >
            <div class="container">
                <div class="row">
                  <div class="col-md-12">
                  <div class="form-group">
                  <label class="control-label">Upload File</label>
                  <div class="preview-zone hidden">
                      <div class="box box-solid">
                      <div class="box-header with-border">
                      <div><b>Preview</b></div>
                        <div class="box-tools pull-right">
                        <button type="button" class="btn btn-danger btn-xs remove-preview">
                            <i class="fa fa-times"></i> Reset This Form
                        </button>
                        </div>
                      </div>
                        <div class="box-body"></div>
                      </div>
                  </div>
                  <div class="dropzone-wrapper">
                      <div class="dropzone-desc">
                        <i class="glyphicon glyphicon-download-alt"></i>
                        <p>Choose an image file or drag it here.</p>
                      </div>
                      <input type="file" name="img_logo" class="dropzone">
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                  <button type="submit" class="btn btn-primary pull-right">Upload</button>
                  </div>
                </div>
            </div>
            </form> 
        </section>

      <!-- </div> -->
    <!-- </div> -->
  </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

<script src="../assets/js/dragdrop.js"></script>

</body>
</html>