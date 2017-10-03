<?php

namespace App\Http\Controllers;

use App\person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function index()
    {

        return view('people.index');

    }

    public function showPerson() {
      //

      $people = new Person;

      $people = Person::orderBy('created_at','desc')->withTrashed()->take(50)->get();

      // people = Person::orderBy('created_at', 'desc');->get();

      return view('people.show_people.index', ['people' => $people]);
    }

    public function createPerson()
    {

        return view('people.create_people.index');

    }

    public function editPerson()
    {

        return view('people.edit_people.index');

    }

    public function deletePerson()
    {

        return view('people.delete_people.index');

    }

    public function findPerson()
    {

        return view('people.find_people.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new Person;

        $this->validate(request(),[
          'name_first' => 'required',
          'name_last' => 'required',
          'email' => 'required',
          'phone_number' => 'required'
        ]);

        Person::create([
          'name_first' => request('name_first'),
          'name_middle' => request('name_middle'),
          'name_last' => request('name_last'),
          'email' => request('email'),
          'phone_number' => request('phone_number')
        ]);

        return redirect('/people/show');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(person $person)
    {
        //
    }
}
