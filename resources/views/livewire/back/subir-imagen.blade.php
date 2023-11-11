@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css"
        integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endsection
<div class="vyg-mb-70">

  @if($message = Session::get('success'))
    <div class="uk-alert-success" uk-alert>
      <a href class="uk-alert-close" uk-close></a>
      <p style="padding: 10px; background-color: #9afba4; color: #003100">{{ $message }}</p>
    </div>
  @endif

  <div class="col s12">
    <h2 class="header">Subir imágenes para galeria de trabajos realizados</h2>
    <div class="card horizontal ">
      <div class="card-stacked">
        <div class="card-content">
          <p>Use este formulario para subir imágens para alimentar la galería de imágenes de trabajos realizados en V &
            G Diseño Mobiliario S.A.S</p>
          <br>
          <div class="row">
            <form class="col s12" action="{{ route('back.guardar-imagen') }}" method="post"
                  enctype="multipart/form-data">
              @csrf

              <div class="row">
                <div class="input-field col s12">
                  <select name="category">
                    <option value="" selected>Seleccione una opción</option>
                    <option value="cocinas">Cocinas</option>
                    <option value="closets">Closet</option>
                    <option value="banios">Muebles de baño</option>
                    <option value="centros">Centros de entretenimiento</option>
                    <option value="oficinas">Muebles de oficina</option>
                    <option value="varios">Proyectos varios</option>
                  </select>
                  <label>Seleccione una categoría</label>
                </div>
                <div class="input-field col s12">
                  <input type="file" name="url" accept="image/*">
                  @error('url')
                  <p>{{ $message }}</p>
                  @enderror
                </div>

                <div class="col 12">
                  <br>
                  <button class="btn waves-effect waves-light" type="submit" name="action">Subir imágen
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </form>
          </div>
{{--          <form action="{{ route('back.guardar-imagen') }}"--}}
{{--                class="dropzone"--}}
{{--                id="my-awesome-dropzone"  method="POST">--}}
{{--               --}}
{{--          </form>--}}
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    let elems = document.querySelectorAll('select');
    let instances = M.FormSelect.init(elems);
  });
</script>

@section('js')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"
          integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"></script>">
@endsection
