<livewire:front.cabecera title="Galería de trabajos | "
                         description="Trabajos en V y G Diseño Mobiliario s.a.s, Galeria de trabajos, trabajos realizados"/>
<section>
  <div class="jumbo-galeria" uk-parallax="bgy: -80">
    <div class="titulo-pagina">
      <h2>Nuestros Trabajos</h2>
    </div>
  </div>
</section>
<section class="trabajos vyg-mt-70 vyg-mb-70">

  <div class="row container">
    <p class="vyg-pt-20 vyg-pb-50">A continuación podrá ver cada uno de los proyectos que hemos
      realizado en <strong>V & G Diseño Mobiliario S.A.S.</strong></p>
    <div class="col s12">
      <ul class="tabs tabs-fixed-width">
        <li class="tab col s3"><a class="active" href="#cocina">Cocinas</a></li>
        <li class="tab col s3"><a href="#closet">Closets</a></li>
        <li class="tab col s3"><a href="#centros">Centros de entretenimiento</a></li>
        <li class="tab col s3"><a href="#banio">Muebles de baño</a></li>
        <li class="tab col s3"><a href="#oficina">Muebles de oficina</a></li>
        <li class="tab col s3"><a href="#varios">Varios</a></li>
      </ul>
    </div>
    <br>
    <div id="cocina" class="col s12">
      <br>

      {{-- Imagenes para cocinas --}}
      <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: fade">
        @foreach($cocinas as $cocina)
          <div>
            <a class="uk-inline" href="{{ $cocina->url }}" data-caption="Caption 1">
              <img src="{{ $cocina->url }}" width="1800" height="1200" alt="">
            </a>
          </div>
        @endforeach
      </div>
    </div>

    {{-- Imagenes para closets --}}

    <div id="closet" class="col s12">
      <br>
      <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: fade">
        @foreach($closets as $closet)
          <div>
            <a class="uk-inline" href="{{ $closet->url }}" data-caption="Caption 1">
              <img src="{{ $closet->url }}" width="1800" height="1200" alt="">
            </a>
          </div>
        @endforeach
      </div>
    </div>
    {{-- Imagenes para Centros de entretenimiento --}}
    <div id="centros" class="col s12">
      <br>
      <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: fade">
        @foreach($centros as $centro)
          <div>
            <a class="uk-inline" href="{{ $centro->url }}" data-caption="Caption 1">
              <img src="{{ $centro->url }}" width="1800" height="1200" alt="">
            </a>
          </div>
        @endforeach
      </div>
    </div>
    {{-- Imágenes para muebles de baño --}}
    <div id="banio" class="col s12">
      <br>
      <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: fade">
        @foreach($banios as $banio)
          <div>
            <a class="uk-inline" href="{{ $banio->url }}" data-caption="Caption 1">
              <img src="{{ $banio->url }}" width="1800" height="1200" alt="">
            </a>
          </div>
        @endforeach
      </div>
    </div>
    {{-- Imágenes para muebles de oficina --}}
    <div id="oficina" class="col s12">
      <br>
      <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: fade">
        @foreach($oficinas as $oficina)
          <div>
            <a class="uk-inline" href="{{ $oficina->url }}" data-caption="Caption 1">
              <img src="{{ $oficina->url }}" width="1800" height="1200" alt="">
            </a>
          </div>
        @endforeach
      </div>
    </div>
    {{-- Imágenes para muebles de oficina --}}
    <div id="varios" class="col s12">
      <br>
      <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: fade">
        @foreach($varios as $vario)
          <div>
            <a class="uk-inline" href="{{ $vario->url }}" data-caption="Caption 1">
              <img src="{{ $vario->url }}" width="1800" height="1200" alt="">
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<script>
  /*M.AutoInit();*/
  document.addEventListener('DOMContentLoaded', function () {
    let tabs = document.querySelector('.tabs');
    let instance = M.Tabs.init(tabs)
  })
</script>
<livewire:front.piecera/>
