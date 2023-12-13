<?php 
include("../essentials/header.php");
include("../essentials/config.php");

?>
<nav   class="navbar" data-bs-theme="dark" style="background-color: #0a4275;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="./img/logo2.png"height=90 width=120 alt="">Code HN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'?>"  aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'add.php') echo 'active'?>" href="add.php">ADD Mobile</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control bg-light text-primary me-2" type="search" id="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit" id="btn">Search</button>
      </form>
    </div>
  </div>
</nav>

<h1 class='my-5 display-3 text-primary text-center'>Welcome to Code HN.<h1>
<div class="container my-4 d-flex justify-content-center flex-wrap" >
    <div class="row"id="mobiles">


    </div>
</div>
<div class="container my-4 d-flex justify-content-center flex-wrap" >
    <div class="row"id="searchResult">


    </div>
</div>

<script>
  AOS.init();
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./app.js"></script>
<?php

include("footer.php");

?>