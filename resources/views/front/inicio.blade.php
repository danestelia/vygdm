<livewire:front.cabecera title="Inicio - página principal | "/>

{{--Seccion inicial--}}
<section>
  <div class="contenedor-superior-inicio w-full">
    <div class="image-superior-inicio uk-animation-slide-top-small ">
      <img src="{{ asset('img/decoracion-sencilla.jpg') }}" alt="Mueble y decoración">
    </div>

    <div class="info-superior-inicio uk-animation-slide-right-medium">
      <h1>Tus <span>espacios</span> <br/> personalizados</h1>
      <p>Nuestros proyectos se destacan por su diseño personalizado. Entendemos que cada hogar y cada lugar de trabajo
        es único, y por
        eso trabajamos estrechamente con nuestros clientes para crear proyectos que se adapten a sus necesidades y
        gustos. </p>
      <br>

      <div class="btn-action ">
        <a class="cotiza waves-effect waves-light btn-large"><i class="tiny material-icons left">event_note</i>Cotiza tu proyecto aquí</a>
        <br>
        <a class="llama waves-effect waves-light btn-large"><i class="material-icons left">call</i>Contáctanos ahora</a>
      </div>

    </div>

  </div>
</section>

{{-- Seccion porqué elegirnos --}}
<section class="seccion-elegirnos-inicio px-30">
  <div class="contenedor-nosotros container">
    <div class="info-elegirnos uk-animation-slide-right">
      <h2>Porqué elegirnos: La elección perfecta para tu mobiliario</h2>
      <p>En V&G Diseño Mobiliario, entendemos que la elección de mobiliario para tu hogar es una decisión importante que
        refleja tu estilo, comodidad y personalidad. </p>
      <p>
        Aquí te presentamos las razones por las que deberías elegirnos como
        tu proveedor de mobiliario para el hogar y la oficina:
      </p>
      <br>
      <a class="waves-effect waves-light btn-small"><i class="material-icons left"></i>Leer más...</a>
    </div>
    <div class="imagen-elegirnos uk-animation-slide-left">
      <img src="{{ asset('img/carpintero.png') }}" alt="Carpintero">
    </div>
  </div>
</section>



{{-- Sección servicios más importantes --}}

<section class="px-30">
  <div class="contenedor-clientes container">
    <div class="titulo-dicen-clientes">
      <h2>Aquí tenemos el testimonio de lo que piensan nuestros clientes </h2>
    </div>

    <div class="slaider-clientes uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
         uk-slideshow="animation: push; autoplay: true">

      <ul class="uk-slideshow-items">
        <li>
          <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
            <img src="{{ asset('img/fondo-clientes.png') }}" alt="" >
          </div>
          <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: transparent,transparent"></div>
          <div class="uk-position-center uk-position-medium uk-text-center">
            <div uk-slideshow-parallax="scale: 1,1,0.8">
              <h2 uk-slideshow-parallax="x: 200,0,0" class="nombre-cliente">Victor Guevara</h2>
              <p uk-slideshow-parallax="x: 400,0,0;">Esto es lo que dijo el señor Victor Guevara.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
            <img src="{{ asset('img/fondo-clientes.png') }}" alt="" >
          </div>
          <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: transparent,transparent"></div>
          <div class="uk-position-center uk-position-medium uk-text-center">
            <div uk-slideshow-parallax="scale: 1,1,0.8">
              <h2 uk-slideshow-parallax="x: 200,0,0" class="nombre-cliente">Maria Del Pilar</h2>
              <p uk-slideshow-parallax="x: 400,0,0;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                aspernatur, earum eos fugiat illum impedit itaque porro praesentium quasi, quod quos ratione sapiente
                tempora unde vel? Ab dolor enim hic.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
            <img src="{{ asset('img/fondo-clientes.png') }}" alt="" >
          </div>
          <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: transparent,transparent"></div>
          <div class="uk-position-center uk-position-medium uk-text-center">
            <div uk-slideshow-parallax="scale: 1,1,0.8">
              <h2 uk-slideshow-parallax="x: 200,0,0" class="nombre-cliente">Lucas Parra</h2>
              <p uk-slideshow-parallax="x: 400,0,0;">"Mensaje de Lucas para el sitio".</p>
            </div>
          </div>
        </li>
      </ul>

      <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous
         uk-slideshow-item="previous"></a>
      <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next
         uk-slideshow-item="next"></a>

    </div>
  </div>
</section>
<livewire:front.piecera/>


