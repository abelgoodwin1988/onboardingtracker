{{--
{{$person->id}}
{{$person->name_first}}
{{$person->name_middle}}
{{$person->name_last}}
{{$person->email}}
{{$person->phone_number}}
 --}}
<div class="section">
  <div class="columns is-multiline">


  @foreach ($people as $person)
    <div class="column is-4">


    <div class="content">

      <div class="card">

        <div class="card-content">
          <div class="columns">
            <div class="column">

              <p class="title">
                {{$person->name_last}}, {{$person->name_first}}
              </p>
              <p class="subtitle">
                {{$person->name_middle}}
              </p>

              <p class="subtitle">
                {{$person->email}}
              </p>

              <p class="subtitle">
                {{$person->phone_number}}
              </p>

            </div>

            <div class="column">
              <p class="subtitle">
                Created: {{$person->created_at->toFormattedDateString()}}
              </p>
              <p class="subtitle">
                Last Updated: {{$person->updated_at->toFormattedDateString()}}
              </p>
              @if(isset($person->deleted_at))
                <p class="subtitle">
                  Deleted: {{$person->updated_at->toFormattedDateString()}}
                </p>
              @endif
            </div>

          </div>
        </div>

        <footer class="card-footer">
          <p class="card-footer-item">
            <span>
              <a href="/person_id={{$person->person_id}}">View Person</a>
            </span>
          </p>
        </footer>

      </div>
    </div>
    </div>
  @endforeach
  </div>
</div>
