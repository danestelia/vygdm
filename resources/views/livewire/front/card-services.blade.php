<div class="uk-card uk-card-default uk-width-1-2@m">
  <div class="uk-card-header">
    <div class="uk-grid-small uk-flex-middle" uk-grid>
      <div class="uk-width-auto">
        <img class="uk-border-circle" width="70" height="70" src="{{ asset($link) }}" alt="{{ $alt }}">
      </div>
      <div class="uk-width-expand">
        <h3 class="uk-card-title uk-margin-remove-bottom">{{ $title }}</h3>
        <p class="uk-text-meta uk-margin-remove-top">{{ $categoria }}</p>
      </div>
    </div>
  </div>
  <div class="uk-card-body">
    <p>{{ $contenido }}</p>
  </div>
  <div class="uk-card-footer">
    <a class="waves-effect waves-light btn-small" href="{{ $target }}">Más información</a>
  </div>
</div>
