

<div class="d-flex flex-column bg-dark " style="width: 4.5rem; height: 100vh; position: fixed; ">
    
    <a href="index.php?page=home" class="d-block p-3 link-dark text-decoration-none" title='<?php /* echo $parametri_vista["img_five_barra"] */?>' data-bs-toggle="tooltip" data-bs-placement="right">
   <!--  <i class="fas fa-user icone"></i> -->
   <img src="./public/img/five-bianco.png" alt="" class="logobarra">
      <span class="visually-hidden">HomePage</span>
    </a>
    
    <a href="index.php?page=home" class="nav-link py-3 border-bottom" title="Customers" data-bs-toggle="tooltip" data-bs-placement="right">
    <i class="fas fa-home icone"></i>
        </a>
      </li>
    
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
      <li class="nav-item">
        <a href="index.php?page=utenti" class="nav-link py-3 border-bottom" aria-current="page" title="LISTA UTENTI" data-bs-toggle="tooltip" data-bs-placement="right">
        <i class="fas fa-users icone"></i>
        </a>
      </li>
      <li>
        <a href="<?php echo 'index.php?page=addUtenti' ?>" class="nav-link py-3 border-bottom" title="ADD UTENTI" data-bs-toggle="tooltip" data-bs-placement="right">
        <i class="fas fa-user-plus icone"></i>
        </a>
      </li>
      <li>
        <a href="<?php echo 'index.php?page=todo' ?>" class="nav-link py-3 border-bottom" title="Orders" data-bs-toggle="tooltip" data-bs-placement="right">
        <i class="far fa-calendar-alt icone" ></i>
        </a>
      </li>
      <li>
        <a href="<?php echo 'index.php?page=files' ?>" class="nav-link py-3 border-bottom" title="FILES" data-bs-toggle="tooltip" data-bs-placement="right">
        <i class="far fa-file icone"></i>
        </a>
      </li>
      <li>
    </ul>
    <div class="dropdown border-top">
      <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>