<livewire:front.cabecera title="Inicio sesión | "/>


<section class="margen-top container">
  @if($message = Session::get('success'))
    <div class="uk-alert-success" uk-alert>
      <a href class="uk-alert-close" uk-close></a>
      <p>{{ $message }}</p>
    </div>
  @endif

  <h1 class="centrar-text">Crear usuario nuevo</h1>


  <div class="row card">
    <form class="col s12" method="post" action="{{ route('store.user') }}">
      @csrf
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="names" type="text" class="validate" name="names" min="3" max="30" required pattern="[a-z A-Z]{3,30}"
                 title="Solo letras" value="{{ old('names') }}">
          <label for="names" class="active">Nombres</label>
          @error('names')
          <div class="uk-alert-danger" uk-alert>
            <a href class="uk-alert-close" uk-close></a>
            <p>{{ $message }}</p>
          </div>
          @enderror

        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="apellidos" type="text" class="validate" name="apellidos" pattern="[a-z A-Z]{5-20}" min="5" max="30"
                 required value="{{ old('apellidos') }}">
          <label for="apellidos">Apellidos</label>
          @error('apellidos')
          <div class="uk-alert-danger" uk-alert>
            <a href class="uk-alert-close" uk-close></a>
            <p>{{ $message }}</p>
          </div>
          @enderror
        </div>
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
          <i class="material-icons prefix">home</i>
          <input id="adreess" type="text" class="validate" name="adreess" required value="{{ old('adreess') }}">
          <label for="adreess">Dirección</label>
          @error('adreess')
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
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input id="password" type="password" class="validate" name="password" required>
          <label for="password">Contraseña</label>
          @error('password')
          <div class="uk-alert-danger" uk-alert>
            <a href class="uk-alert-close" uk-close></a>
            <p>{{ $message }}</p>
          </div>
          @enderror
        </div>
      </div>
      <div class="row centrar-div">
        <button class="btn waves-effect waves-light" type="submit">Guardar usuario
          <i class="material-icons right">send</i>
        </button>
      </div>

    </form>
  </div>
</section>

<livewire:front.piecera/>
