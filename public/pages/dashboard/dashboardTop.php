    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow bgGreen">

        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">CONTROLE FINANCEIRO</a>

        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <ul class="navbar-nav px-3">
            <li class="text-nowrap">
                <span>SAIR</span>
            </li>
        </ul>

    </header>
      
      <div class="container-fluid">
        <div class="row">

          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">

              <ul class="nav flex-column">

                <li class="nav-item">
                  <span class="nav-link" aria-current="page" ><i class="fas fa-bars"></i></span>
                </li>

                <li class="nav-item">
                  <span onclick="redirectToUsuarios()" class="nav-link" aria-current="page" ><i class="fas fa-users"></i><span class="text">&nbsp;&nbsp;Usuarios</span></span>
                </li>

                <li class="nav-item">
                  <span onclick="redirectToLancamentos()" class="nav-link" aria-current="page" ><i class="fas fa-money-bill-wave"></i><span class="text">&nbsp;&nbsp;Lançamentos</span></span>
                </li>

               
              </ul>

            </div>
          </nav>
      
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container">