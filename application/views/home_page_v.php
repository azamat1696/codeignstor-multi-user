<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Anasayfa</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-inverse bg-dark">
  <div class="container-fluid mx-5">
    <a class="navbar-brand mx-5 "  style="width: 200px;" href="#"><?php echo $user->full_name; ?></a>
    <div class="nav-item dropdown mx-5">

          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Işlemler
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo base_url('cikis/' . md5($user->email)); ?>">Çıkış</a></li>
            <li><a class="dropdown-item" target="_blank" href="<?php echo base_url('giris') ;?>">Farklı hesap ile oturum aç</a></li>
            <li><hr class="dropdown-divider"></li>
            <?php foreach ($user_list as $item):?>
              <?php  if (md5($item->email) != md5($user->email)): ?>
              <li><a class="dropdown-item" href="<?php echo base_url('anasayfa/' . md5($item->email)) ?>"><?php echo $item->full_name; ?></a></li>
              <?php endif; ?>
              <?php endforeach; ?>
          </ul>
</div>
    
   
  
  </div>
</nav>

 
<h1 class="text-center">Anasayfa</h1>
<hr>
  
    <div class="container">
  
<div class="row">


<div class="col-md-6 offset-md-3 bg-light p-2 text-dark bg-opacity-10 p-5">

<table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">#product_id  </th>
    <th scope="col">#product_name  </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach ($products as $product): ?>
      <th scope="row">#<?php echo $product->id; ?></th>
      <td><?php echo $product->product_name; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>



</div>


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>