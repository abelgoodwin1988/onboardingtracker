@extends('layouts.master')

@section('sub_nav')
  @include('people.layouts.navbar')
@endsection

@section('content')
  {{-- Header: Title & Subtitle --}}
  <section class="hero" id="header">
    <div class="hero-body">
      <h1 class="title">Create record for a new person.</h1>
      <h2 class="subtitle">Fill in the information below to create a new record upon which all other operations take place. This includes creating a contact for a person, a new candidate record, a new employee record an so on!</h2>
    </div>
  </section>

  <hr />

  {{-- Body: Add user forms! --}}
  <section class="section" id="body">

    <form method="post" action="/people/create_person">
      {{csrf_field()}}

      @include('partials.errors.errors_list')

      <div class="field">
        <label class="label" for="name_first">First Name</label>
        <input class="input" type="text" id="name_first" name="name_first" placeholder="First Name">
      </div>

      <div class="field">
        <label class="label" for="name_middle">Middle Name(s)</label>
        <input class="input" type="text" id="name_middle" name="name_middle" placeholder="Middle Name(s)">
      </div>

      <div class="field">
        <label class="label" for="name_last">Last Name(s)</label>
        <input class="input" type="text" id="name_last" name="name_last" placeholder="Last Name(s)">
      </div>

      <button class="button" type="submit" class="btn btn-primary">Publish</button>

    </form>

  </section>


@endsection
