<footer class="footer">
    <div class="container contenido-footer">
      <div class="menu-footer">
        <h3>Menú Principal</h3>
        <ul>
          <li><a href="{{ route('inicio') }}">Inicio</a></li>
          <li><a href="{{ route('page.nosotros') }}">Nosotros</a></li>
          <li><a href="{{ route('page.servicios') }}">Servicios</a></li>
          <li><a href="{{ route('page.galeria') }}">Galería</a></li>
          <li><a href="{{ route('page.blog') }}">Blog</a></li>
          <li><a href="{{ route('page.contacto') }}">Contacto</a></li>
        </ul>
      </div>
      <div class="footer-redes">
        <h3>Redes Sociales</h3>
        <div>
          <a href="" uk-icon="icon: facebook; ratio: 2"></a>
          <a href="" uk-icon="icon: instagram; ratio: 2"></a>
          <a href="" uk-icon="icon: pinterest; ratio: 2"></a>
        </div>

      </div>
      <div></div>
    </div>
  <div class="copy">
    <p>{{ date('Y') }} &copy; Derechos reservados V & G Diseño Mobiliario S.A.S</p>
  </div>
</footer>
<!-- Compiled and minified JavaScript -->
<script src="{{ asset('js/materialize.min.js') }}"></script>
<!-- UIkit JS -->
<script src="{{ asset('js/uikit.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.1/dist/js/uikit-icons.min.js"></script>
<script src=""></script>
</body>
</html>
