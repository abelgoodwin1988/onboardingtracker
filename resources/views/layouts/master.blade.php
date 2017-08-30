<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Onbarding Tracker</title>

    {{-- CSS: --}}
    {{-- CSS:AwesomeFonts --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    {{-- <link rel="stylesheet" href="resources/assets/css/font-awesome.min.css"> --}}
    {{-- CSS:Bulma --}}
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" >

  </head>
  <body>
    <div class="columns is-mobile is-gapless">

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
