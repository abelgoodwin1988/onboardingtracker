  <div class="section is-centered">
    <table class="table">
      <thead>
        <tr>
          <th>Employee ID</th>
          <td>Last Name</td>
          <td>First Name</td>
          <td>Middle Name</td>
          <td>Email</td>
          <td>Phone Number</td>
          <td>Created On</td>
          <td>Last Updated</td>
          <td>Deleted On</td>
        </tr>
      </thead>

      @foreach ($people as $person)
        <tbody>
          <tr>
            <th>
              <a href="/person_id={{$person->person_id}}" title="{{$person->name_last}}, {{$person->name_first}}">{{$person->person_id}}</a>
            </th>
            <th>{{$person->name_last}}</th>
            <th>{{$person->name_first}}</th>
            <th>{{$person->name_middle}}</th>
            <th>{{$person->email}}</th>
            <th>{{$person->phone_number}}r</th>
            <th>{{$person->created_at->toFormattedDateString()}}</th>
            <th>{{$person->updated_at->toFormattedDateString()}}</th>
            <th>
              @if(isset($person->deleted_at))
                  {{$person->deleted_at->toFormattedDateString()}}
              @endif
            </th>
          </tr>
        </tbody>
      @endforeach

    </table>
  </div>
