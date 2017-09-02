<?php

namespace App\Http\Controllers;

use App\person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('people.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('people.create');

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

        return redirect('/people/create');

    }

    public function showPeople() {
      //

      $person = new Person;

      $people = person::all();

      return view('people.show', ['people' => $people]);
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
