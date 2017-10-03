@extends('layouts.master')

@section('sub_nav')
  @include('people.layouts.navbar')
@endsection

@section('content')

  <h1 class="has-text-centered has-text-dark is-size-3">Recently Added</h1>

  {{-- TODO --}}
  {{-- enable toggling between views --}}
  <div class="container">
    <div class="field has-addons has-addons-centered">
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
  </div>

  @include('people.partials.person_table')
@endsection
