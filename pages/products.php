<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>Document</title>
  </head>
  <body>
    <div class="container mt-4">
      <div class="row gap-3">
        <div class="card col" style="width: 18rem">
          <img src="..." class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Product 1</h5>
            <h6>Price: 100$</h6>
            <a
              href="<?php echo 'products-data.php?name=' . urlencode('product-1') . '&price=' . urlencode('100');?>"
              class="btn btn-primary"
              data-price="100"
              data-name="Product-1"
            >
              Add
            </a>
          </div>
        </div>

        <div class="card col" style="width: 18rem">
          <img src="..." class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Product 2</h5>
            <h6>Price: 200$</h6>
            <a
              href="products-data.php?name=product-2&price=200"
              class="btn btn-primary"
              data-price="200"
              data-name="Product-2"
              >Add</a
            >
          </div>
        </div>

        <div class="card col" style="width: 18rem">
          <img src="..." class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Product 3</h5>
            <h6>Price: 300$</h6>
            <a
              href="products-data.php?name=product-3&price=300"
              class="btn btn-primary"
              data-price="300"
              data-name="Product-3"
              >Add</a
            >
          </div>
        </div>
      </div>
      <div class="row gap-3">
        <div class="card col" style="width: 18rem">
          <img src="..." class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Product 4</h5>
            <h6>Price: 400$</h6>
            <a
              href="products-data.php?name=product-4&price=400"
              class="btn btn-primary"
              data-price="400"
              data-name="Product-4"
              >Add</a
            >
          </div>
        </div>

        <div class="card col" style="width: 18rem">
          <img src="..." class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Product 5</h5>
            <h6>Price: 500$</h6>
            <a
              href="products-data.php?name=product-5&price=500"
              class="btn btn-primary"
              data-price="500"
              data-name="Product-5"
              >Add</a
            >
          </div>
        </div>

        <div class="card col" style="width: 18rem">
          <img src="..." class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Product 6</h5>
            <h6>Price: 600$</h6>
            <a
              href="products-data.php?name=product-6&price=600"
              class="btn btn-primary"
              data-price="600"
              data-name="Product-6"
              >Add</a
            >
          </div>
        </div>
      </div>
      <a href="cart.php" class="btn btn-outline-primary mt-4">Go to cart</a>
    </div>
  </body>
</html>
