<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav me-auto">
            <?php
              $nav = array(
                'class' => 'nav-link'
              );
            ?>
            <li class="nav-item">
              <?= anchor("bundesland", 'Domov 🏠', $nav); ?>
            </li>
            <li class="nav-item">
              <?= anchor('smazat', 'Smazat data', ['class' => 'nav-link']) ?>
            </li>
            </li>
            <li class="nav-item">
              <?= anchor('mapa', 'Mapa', ['class' => 'nav-link']) ?>
            </li>
          </ul>
        </div>
      </div> 
    </nav>