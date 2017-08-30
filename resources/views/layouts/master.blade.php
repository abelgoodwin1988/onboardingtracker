<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Onbarding Tracker</title>

    {{-- CSS: --}}
    {{-- CSS:Bulma,Font-Awesome --}}
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
            @yield('sub_nav')
            subnav
          </div>
        </div>
        <div class="columns">
          <div class="column">
            @yield('content')
            content
          </div>
        </div>
        <div class="columns">
          <div class="column">
            @include('layouts.master_footer')
          </div>
        </div>
      </div>
    </div>

    {{-- JS: Mixed JS file --}}
    <script src="{{ mix('/js/app.js') }}"></script>
  </body>
</html>
