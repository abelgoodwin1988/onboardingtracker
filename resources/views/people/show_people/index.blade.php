@extends('layouts.master')

@section('sub_nav')
  @include('people.layouts.navbar')
@endsection

@section('content')

  <section class="hero" id="header">
    <div class="hero-body">
      <h1 class="title">Recently Added</h1>
      <h2 class="subtitle">50 Most recently added people. Toggle between table and card views.</h2>
    </div>
  </section>

  <hr />

  {{-- TODO --}}
  {{-- enable toggling between views --}}
  <div class="field has-addons">
    <p class="control">
      <a class="button">
        <span class="icon is-small">
          <i class="fa fa-address-card-o"></i>
        </span>
      </a>
    </p>

    <p class="control">
      <a class="button">
        <span class="icon is-small">
          <i class="fa fa-list"></i>
        </span>
      </a>
    </p>
  </div>

  @include('people.partials.person_table')
@endsection
