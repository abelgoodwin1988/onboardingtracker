@if (count($errors))
  <div class="form-group">
    <div class="alert alert-danger">
      <ul class="list-group">
        @foreach ($errors->all() as $error)
          <li style="margin-left:2em;margin-right:2em;"> {{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
@endif
