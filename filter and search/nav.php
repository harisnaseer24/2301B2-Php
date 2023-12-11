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
      <form class="d-flex" role="search" method="get" action="search.php">
        <input class="form-control bg-light text-primary me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit" >Search</button>
      </form>
    </div>
  </div>
</nav>