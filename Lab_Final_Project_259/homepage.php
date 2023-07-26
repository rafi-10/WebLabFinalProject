<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Home Page</title>
  <script src="https://kit.fontawesome.com/58ecfd313b.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis">Inventory</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis">Customers</a></li>
          <li class="nav-item dropdown"><a href="#" class="nav-link px-2 link-body-emphasis dropdown-toggle"
              data-bs-toggle="dropdown">Products</a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="insert.php">Insert Product</a></li>
            </ul>
        </ul>
        </li>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="searchAction.php" method="post">
          <input type="text" name="search" class="form-control" placeholder="Search Products..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="fa-solid fa-user"></i>
          </a>
          <ul class="dropdown-menu text-small" style="">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <section class="hero-section  text-center">
    <h2>Welcome to the Project!</h2>
    <p>Here we can Insert product, Update Product, Delete Product and Search Product.</p>
  </section>

  <!-- Food Items -->
  <section>
    <?php
    include 'config.php';
    $allData = mysqli_query($conn, "SELECT * FROM product");
    echo "<div class= 'row'>";
    while ($row = mysqli_fetch_array($allData)) {
      echo "<div class='col-lg-3 col-md-6'>";
      echo "<div class='d-flex border-danger m-5 card col-lg-9' style='background-image: url(" . $row['image'] . "); background-position: center;
        background-size: cover'>";
      echo "<div class='card-body'>";
      echo "<span class='h4 bg-secondary card-title'>" . $row['product_name'] . "</span>";
      echo "<p class='card-text'>" . "Price: " . $row['price'] . "$" . "</p>";
      echo "<div class='d-flex gap-2 justify-content-center'>";
      echo "<button type='button' class='btn btn-danger' onclick=\"location.href='delete.php? id=$row[Id]';\">Delete</button>";
      echo "<button type='button' class='btn btn-warning' onclick=\"location.href='update.php? id=$row[Id]';\">Update</button>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    }
    echo "</div>";
    ?>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>