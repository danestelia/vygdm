<livewire:front.cabecera title="Inicio sesión | "/>
<section class="contenedor-login container">
  <h1 class="centrar-text">Iniciar sesión</h1>
  <div class="row card" >
    <form class="col s12 " method="post" action="{{ route('authenticate') }}">
      @csrf
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
          <label for="email">Correo electrónico</label>
          @error('email')
          <div class="uk-alert-warning" uk-alert>
            <a href class="uk-alert-close" uk-close></a>
            <p>{{ $message }}</p>
          </div>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input id="password" type="password" class="validate" name="password" value="{{ old('password') }}" required>
          <label for="password">Contraseña</label>
          @error('password')
          <div class="uk-alert-warning" uk-alert>
            <a href class="uk-alert-close" uk-close></a>
            <p>{{ $message }}</p>
          </div>
          @enderror
        </div>
      </div>
      <div class="row centrar-div">
        <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar sesión
          <i class="material-icons right">send</i>
        </button>
      </div>

    </form>
  </div>
</section>
<livewire:front.piecera/>
