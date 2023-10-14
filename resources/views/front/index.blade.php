<livewire:front.cabecera title="Inicio | "/>


<div class="hero">
  <div class="contenedor-menu container">
    <button id="boton-menu" class="boton">Menú</button>
    <nav id="nav-menu" class="">
      <ul class="ul-menu">
        <li><a href="{{ route('inicio') }}">
            <i class="large material-icons">home</i>
            <p>Inicio</p>
          </a>
        </li>

        <li><a href="{{ route('page.nosotros') }}">
            <i class="large material-icons">sentiment_very_satisfied</i>
            <p>Sobre Nosotros</p>
          </a>
        </li>

        <li><a href="{{ route('page.servicios') }}">
            <i class="material-icons">shopping_cart</i>
            <p>Servicios</p>
          </a>
        </li>

        <li><a href="{{ route('page.galeria') }}">
            <i class="material-icons">camera</i>
            <p>Galería</p>
          </a>
        </li>

        <li><a href="{{ route('page.blog') }}">
            <i class="material-icons">sms</i>
            <p>Blog</p>
          </a>
        </li>

        <li><a href="{{ route('page.contacto') }}">
            <i class="material-icons">phone_in_talk</i>
            <p>Contacto</p>
          </a>
        </li>

      </ul>
    </nav>

  </div>

</div>


