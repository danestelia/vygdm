<livewire:front.cabecera title="Contacta con nosotros | "
                         description="Contacta con V y G Diseño Mobiliario S.A.S diseño y fabricación de cocinas integrales en Barranquilla, closet modernos a medida,
  muebles de baño, centros de entretenimiento"/>
<section>
  <div class="jumbo-contacto" uk-parallax="bgy: -80">
    <div class="titulo-pagina">
      <h2>Cómo contactarnos</h2>
    </div>
  </div>
</section>
<section class="vyg-mt-70 vyg-mb-70">
  <div class="container">
    <h1 class="uk-heading-divider uk-animation-slider-left">¡Contáctanos!</h1>
    <br/>
    <div class="uk-panel uk-animation-slide-bottom">
      <p class="text-justify">En V&G Diseño Mobiliario S.A.S, estamos comprometidos en proporcionarte los muebles y
        soluciones de diseño de interiores que se adaptan a tus necesidades y estilo. Estamos aquí para responder a tus
        preguntas, recibir tus comentarios y ayudarte a hacer realidad tus proyectos de diseño de interiores. Siéntete
        libre de ponerte en contacto con nosotros de la manera que mejor te convenga.</p>
    </div>
    <br>
    <div class="uk-child-width-expand@s uk-text-center" uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <h2 class="text-center">Informacion de contacto</h2>
          <h3 class="text-left">Dirección:</h3>
          <p class="text-left">Carrera 38 # 69D - 115 Barrio Olaya</p>
          <p class="text-left">Barranquilla - Atlántico</p>
          <h3 class="text-left">Teléfono:</h3>
          <p class="text-left"><span uk-icon="icon: receiver"></span> 302 842 7760</p>
          <p class="text-left"><span uk-icon="icon: whatsapp"></span> 302 842 7760</p>


          <h3 class="text-left">Correo electrónico:</h3>
          <p class="text-left">info@vygdisenomobiliariosas.com</p>
          <h3 class="text-left">Horario de atención:</h3>
          <p class="text-left">Lunes a viernes: 8:00 am - 6:00 pm</p>

        </div>
      </div>
      <div>
        <div class="uk-card uk-card-default uk-card-body">
          <h2 class="text-center">Formulario de contacto</h2>
          <p class="text-justify">Puedes utilizar el siguiente formulario para enviarnos un mensaje directamente desde
            nuestra página web. Nuestro equipo se pondrá en contacto contigo lo más pronto posible.</p>
          <br>
          <form class="col s12 contacto" method="post" action="">
            @csrf
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="names" type="text" class="validate" name="names" min="3" max="30" required
                       pattern="[a-z A-Z]{3,30}"
                       title="Solo letras" value="{{ old('names') }}">
                <label for="names" class="active">Nombre Completo</label>
                @error('names')
                <div class="uk-alert-danger" uk-alert>
                  <a href class="uk-alert-close" uk-close></a>
                  <p>{{ $message }}</p>
                </div>
                @enderror
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">phone</i>
                  <input id="phone" type="number" class="validate" name="phone" required value="{{ old('phone') }}">
                  <label for="phone">Teléfono</label>
                  @error('phones')
                  <div class="uk-alert-danger" uk-alert>
                    <a href class="uk-alert-close" uk-close></a>
                    <p>{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">email</i>
                  <input id="email" type="email" class="validate" name="email" required value="{{ old('email') }}">
                  <label for="email">Correo electrónico</label>
                  @error('email')
                  <div class="uk-alert-danger" uk-alert>
                    <a href class="uk-alert-close" uk-close></a>
                    <p>{{ $message }}</p>
                  </div>
                  @enderror
                </div>
              </div>
              <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea" name="message" required
                        value="{{ old('email') }}"></textarea>
                <label for="textarea1">Escribe aquí tu mensaje</label>
              </div>

              <div class="row centrar-div">
                <button class="btn waves-effect waves-light" type="submit">Enviar mensaje
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <br>
    <h2>Como llegar</h2>
    <div class="mapa center">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4657.787854216399!2d-74.8095342052506!3d10.984712301331601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d13f398337d%3A0x7ed25250979949bd!2sV%26G%20Dise%C3%B1o%20Mobiliario%20S.A.S!5e0!3m2!1ses-419!2sco!4v1698537281286!5m2!1ses-419!2sco" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
<livewire:front.piecera/>
