<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <script src="https://kit.fontawesome.com/58ecfd313b.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Product Insertion</title>
  <style>
    .h-custom {
      height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
  </style>
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5 ">
          <!-- Product image -->
          <img src="foodbg.jpg" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="insertAction.php" method="post" enctype="multipart/form-data">
            <div class="mb-4">
              <h4>Product Insertion</h4>
            </div>

            <!-- Product name input -->
            <div class="form-outline mb-4">
              Product Name:
              <input type="text" class="form-control form-control-lg" name="productname" required
                placeholder="Enter Product Name" />
            </div>

            <!-- Product price input -->
            <div class="form-outline mb-4 input-icon">
              Product Price:
              <input type="number" class="form-control form-control-lg" name="price" required
                placeholder="Enter Product Price" />
            </div>

            <div class="form-outline mb-4">
              Product Image :
              <input type="file" class="form-control form-control-lg" name="image" required
                placeholder="Upload Product Image">
            </div>
            <!-- Submit button -->
            <div class="text-center mt-4">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div
      class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <footer class="text-white mb-3 mb-md-0">
        &copy; 2023. All rights reserved.
      </footer>
    </div>

  </section>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>