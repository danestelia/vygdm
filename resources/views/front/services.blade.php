<livewire:front.cabecera title="Nuestros servicios | "/>
<section>
  <div class="jumbo-servicios" uk-parallax="bgy: -20">
    <div class="titulo-pagina">
      <h2>Ofrecemos nuestros servicios en</h2>
    </div>
  </div>
</section>
<section class="px-60">
  <div class="container row uk-animation-slide-left">
    <div class="col s12 m4 ">
      <livewire:front.card-services
        title="Cocinas integrales"
        contenido="
        la cocina integral en Barranquilla, se ha convertido en mucho más que un espacio para preparar alimentos.
         Es el corazón del hogar. Dale click al botón abajo para más información.
      "
        link="img/cocina-integral-miniatura.jpg"
        alt="Cocina integral"
        categoria="Hogar"
        target="{{ route('page.cocinas') }}"
      />
    </div>
    <div class="col s12 m4">
      <livewire:front.card-services
        title="Closets a medida"
        contenido="
        ¡Descubre la perfección en cada espacio de tu hogar con nuestros closets a medida!
        nos especializamos en el diseño y construcción de closets personalizados que se adaptan a tu estilo de vida y maximizan la organización en tu hogar.
      "
        link="img/closet-miniatura.jpg"
        alt="Closet"
        categoria="Hogar"
        target="{{ route('page.closets') }}"
      />
    </div>
    <div class="col s12 m4">
      <livewire:front.card-services
        title="Muebles de entretenimiento"
        contenido="
          ¿Quieres transformar un rincón de tu hogar en Barranquilla en un lugar de entretenimiento y compartir familiar   de primer nivel?
          ¡Estás en el lugar adecuado!
        "
        link="img/centro-entretenimiento-miniatura.jpg"
        alt="mueblede entretenimiento"
        categoria="Hogar"
        target="{{ route('page.centros') }}"
      />
    </div>
  </div>
  <div class="container row uk-animation-slide-left">
    <div class="col s12 m4">
      <livewire:front.card-services
        title="Muebles para baño"
        contenido="
          Si estás buscando renovar tu baño en Barranquilla, con muebles a medida que combinen funcionalidad y estilo,
           estás en el lugar indicado, dale click al botón abajo para más información.
        "
        link="img/mueble-baño-miniatura.jpg"
        alt="Muebles para baño"
        categoria="Hogar"
        target="{{ route('page.banios') }}"
      />
    </div>
    <div class="col s12 m4">
      <livewire:front.card-services
        title="Mobiliario para oficina"
        contenido="
        Contar con muebles de oficina ergonómicos y funcionales
        es esencial para mejorar la productividad y el bienestar de los trabajadores.
        fabricamos escritorios para oficina como una solución ideal para adecuar
        los espacios laborales. Para más información click al botón abajo."
        link="img/escritorio-oficina-miniatura.jpg"
        alt="Escritorio para oficina"
        categoria="Oficina"
        target="{{ route('page.oficina') }}"
      />
    </div>

  </div>


</section>
<livewire:front.piecera/>
