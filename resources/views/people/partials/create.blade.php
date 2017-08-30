<h1 class="title">Add Person</h1>

<hr />

<div class="field is-horizontal">
  {{-- First Name --}}
  <div class="field-label is-normal">
    <label class="label" for="name_first">First Name</label>
    <div class="field-body">
      <input class="input" type="text" id="name_first" name="name_first" placeholder="John">
    </div>
  </div>

  {{-- Middle Name --}}
  <div class="field-label is-normal">
    <label class="label" for="name_middle">Middle Name(s)</label>
    <div class="field-body">
      <input class="input" type="text" id="name_middle" name="name_middle" placeholder="Yousef">
    </div>
  </div>

  {{-- Last Name --}}
  <div class="field-label is-normal">
    <label class="label" for="name_last">Last Name(s)</label>
    <div class="field-body">
      <input class="input" type="text" id="name_last" name="name_last" placeholder="Doe">
    </div>
  </div>

</div>

<div class="field is-horizontal">
  {{-- Email --}}
  <div class="field-label is-normal">
    <label class="label" for="email">Email</label>
    <div class="field-body">
      <input class="input" type="email" id="email" name="email" placeholder="you@example.com">
    </div>
  </div>

  {{-- Phone Number --}}
  <div class="field-label is-normal">
    <label class="label" for="phone_number">Phone Number</label>
    <div class="field-body">
      <input class="input" type="text" id="phone_number" name="phone_number" placeholder="123-456-7890">
    </div>
  </div>
</div>

<div class="field is-horizontal">

</div>

<button class="button is-primary" type="submit">Publish</button>
