<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Onbarding Tracker</title>

    {{-- CSS: --}}
    {{-- CSS:Bulma --}}
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

  </head>
  <body>
    <div class="columns is-mobile">

    {{-- left-aligned thin navbar --}}
    @include('layouts.master_navbar')
    {{-- header sections for additional details --}}
    {{-- content section --}}
      {{-- forms --}}

      <div class="column is-11 is-gapless">
        <div class="columns">
          <div class="column">
            SubNav
          </div>
        </div>
        <div class="columns">
          <div class="column">
            Content
          </div>
        </div>
      </div>
    </div>

    {{-- JS: Mixed JS file --}}
    <script src="{{ mix('/js/app.js') }}"></script>
  </body>
</html>
