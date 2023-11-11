<div>
  <div class="logo-admin">
  </div>
  <div class="menu-admin">
    <nav>
      <div class="container">
        <div class="between">
          <img class="logo-admin" src="{{ asset('img/logo.png') }}" alt="Logo V & G Diseño Mobiliario S.A.S">
          <!-- Dropdown Trigger -->
          <a class='dropdown-trigger btn btn-admin' href='#' data-target='dropdown1'><span uk-icon="user"></span> {{ auth()->user()->names }}</a>
          <!-- Dropdown Structure -->
          <ul id='dropdown1' class='dropdown-content'>
            <li><a href="{{ route('logout.admin') }}">Log out <span uk-icon="sign-out"></span> </a></li>
            <li class="divider" tabindex="-1"></li>
            <li><a href="#"> Mi Perfil <span uk-icon="user"></span></a></li>
          </ul>
        </div>

      </div>
    </nav>

    <ul id="slide-out" class="sidenav">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="{{ asset('img/cocina-integral-page.jpg') }}">
          </div>
          <a href="#"><img class="circle" src="images/yuna.jpg"></a>
          <a href="#"><span class="white-text name">{{ auth()->user()->names }}</span></a>
          <a href="#"><span class="white-text email">{{ auth()->user()->email }}</span></a>
        </div>
      </li>
      <li><a class="waves-effect" href="{{ route('back.inicio') }}"><i class="material-icons">home</i>Inicio</a></li>
      <li><a class="waves-effect" href="{{ route('back.subir-imagen') }}"><i class="material-icons">image</i>Subir imagenes</a></li>
    </ul>
    <div class="container">
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i
          class="btn-menu-admin small material-icons">menu</i></a>
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    let elems = document.querySelectorAll('.sidenav');
    let instances = M.Sidenav.init(elems);

    // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
    let collapsibleElem = document.querySelector('.collapsible');
    let collapsibleInstance = M.Collapsible.init(collapsibleElem);
  });
</script>
