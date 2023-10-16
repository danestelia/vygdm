<livewire:front.cabecera title="Inicio | "/>


<div class="hero">
  <div class="contenedor-menu container">
    <div class="btn-action">
      <a class="cotiza waves-effect waves-light btn-large"><i class="tiny material-icons left">event_note</i>Cotiza tu proyecto aquí</a>
      <br>
      <a class="llama waves-effect waves-light btn-large"><i class="material-icons left">call</i>Contáctanos ahora</a>
    </div>
    <br>
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

        <li><a id="open-modal" href="#modal-sections" uk-toggle="target: #modal-sections">
            <i class="material-icons">format_list_bulleted
            </i>
            <p>Lo que hacemos</p>
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


