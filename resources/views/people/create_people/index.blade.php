@extends('layouts.master')

@section('sub_nav')
  @include('people.layouts.navbar')
@endsection

@section('content')
  {{-- Header: Title & Subtitle --}}
  <section class="hero" id="header">
    <div class="hero-body">
      <h1 class="title">Create a Person.</h1>
      <h2 class="subtitle">Fill in the information below to create a new record upon which all other operations take place. This includes creating a contact for a person, a new candidate record, a new employee record an so on!</h2>
    </div>
  </section>

  <hr />

  {{-- Body: Add user forms! --}}
  <section class="section" id="body">

    <form method="post" action="/people/create_person">
      {{csrf_field()}}

      @include('partials.errors.errors_list')

      @include('people.partials.create')

    </form>

  </section>


@endsection
