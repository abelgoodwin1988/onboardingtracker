@extends('layouts.master')

@section('sub_nav')
  @include('people.layouts.navbar')
@endsection

@section('content')
  {{-- Header: Title & Subtitle --}}
  <section class="hero" id="header">
    <div class="hero-body">
      <h1 class="title">Edit a Person.</h1>
      <h2 class="subtitle">Find a person using the search functionality and click a person of the resulting people: WAMO make edits!</h2>
    </div>
  </section>

  <hr />
@endsection
