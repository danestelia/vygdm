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
<script src="">{{ asset('js/miscript.js') }}</script>
</body>
</html>
