<header>

  <nav class="navbar navbar-expand-lg navbar-light bg-secondary shadow fixed-top">
    <div class="container-fluid">

      <a class="navbar-brand pr-lg-5" href="index.php">
        <img src="./images/logo.png" width="85">
      </a>

      <div class="d-lg-none d-flex flex-row"> 
        <a href="" target="_blank" class="text-dark hover-d-none border-333 h-35 w-35 d-flex justify-content-center align-items-center rounded-circle m-2">
          <i class="fab fa-facebook-f fs-17"></i>
        </a>
        <a href="" target="_blank" class="text-dark hover-d-none border-333 h-35 w-35 d-flex justify-content-center align-items-center rounded-circle m-2">
          <i class="fab fa-whatsapp fs-17"></i>
        </a>
        <a href="" target="_blank" class="text-dark hover-d-none border-333 h-35 w-35 d-flex justify-content-center align-items-center rounded-circle m-2">
          <i class="fab fa-instagram fs-17"></i>
        </a>
      </div>  

      <button class="navbar-toggler border-0 fs-35 outline-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars text-dark"></span>
      </button>

      <div class="collapse navbar-collapse mt-3" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mb-3">
          <li class="nav-item">
            <a class="nav-link py-md-3 py-1 <?php if($_SERVER['REQUEST_URI'] == "/index.php" || $_SERVER['REQUEST_URI'] == "/") { ?> active-link <?php } ?>" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link py-md-3 py-1 <?php if($_SERVER['REQUEST_URI'] == "/about.php") { ?> active-link <?php } ?>" href="about.php">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link py-md-3 py-1 <?php if($_SERVER['REQUEST_URI'] == "/services.php") { ?> active-link <?php } ?>" href="services.php">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link py-md-3 py-1 <?php if($_SERVER['REQUEST_URI'] == "/contact.php") { ?> active-link <?php } ?>" href="contact.php">Contato</a>
          </li>
        </ul>
        <form method="POST" class="mt-md--20" action="process_login.php">
          <p class="mb-0 font-raleway weight-600 ls-05">RASTREAMENTO</p>
          <hr class="mt-0 mb-2" />
          <div class="d-md-flex">
            <input name="login" class="form-control p-3-5 w-md-150" type="text" placeholder="Login" aria-label="Login">
            <input name="password" class="form-control p-3-5 mx-md-1 my-1 my-md-0 w-md-150" type="password" placeholder="Senha" aria-label="Password">
            <button class="btn btn-warning font-raleway weight-600 ls-05 p-2-2" type="submit">Entrar</button>
          </div>
        </form>
        <div class="invisible">.</div>
      </div>
    </div>
  </nav>

</header>