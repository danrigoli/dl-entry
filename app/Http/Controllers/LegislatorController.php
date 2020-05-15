<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Legislator;
use Illuminate\Validation\Rule;

class LegislatorController extends Controller
{

    public function display() // displays legislators on dashboard
    {
        $legislators = Legislator::paginate(10);
        return view('dashboard', compact('legislators'));
    }
    public function display_most() // displays legislators on dashboard by most votes
    {
        $legislators = Legislator::orderBy('votes', 'desc')->paginate(10);
        return view('dashboard', compact('legislators'));
    }
    public function display_ending() // displays legislators on dashboard by ending
    {
        $legislators = Legislator::orderBy('ending')->paginate(10);
        return view('dashboard', compact('legislators'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [ //validating the inputs (email->unique)
            "name" => 'required',
            "surname"  => 'required',
            "email" => 'required|unique:legislators',
            "cellphone" => 'required|tel',
            "votes" => "integer",
            "country" => "required|string",
            "starting" => "required|date",
            
        ]);

        $ending = date('Y-m-d', strtotime("+12 months", strtotime($request->input("starting"))));// adding 12 months for the ending

            if ($request->get('party') == 0) { // asking if the user didn't fill the party input
                $automatic = 1;
                $party = "Azul";
            }
            else {
                $party = $request->get('party');
            }


        $legislator = new Legislator([ //creating new legislator
            'name' => $request->input("name"),
            'surname' => $request->input("surname"),
            'email' => $request->input("email"),
            'cellphone' => $request->input("cellphone"),
            'address' => $request->input("address"),
            'country' => $request->input("country"),
            'votes' => $request->input('votes'),
            'party' => $party,
            'starting' => $request->input("starting"),
            'ending' => $ending,
        ]);


        $legislator->save();


        return redirect('/')->with('status', 'Legislador subido a la base de datos!'); //saves an alert in the session
    }

    public function destroy($id){
            $legislator = Legislator::find($id);
            $legislator->delete();
            $legislators = Legislator::all();

            return redirect()->route('display')->with('status', "Legislador eliminado con exito");
    }

    public function edit($id)
    {
        $legislator = Legislator::find($id);
        return view('edit', compact('legislator'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [ //validating the inputs (email->unique)
            "name" => 'required',
            "surname"  => 'required',
            "email" => ['required',Rule::unique('legislators')->ignore($id)],
            "cellphone" => 'required|integer',
            "votes" => "integer",
            "country" => "required|string",
            "starting" => "required|date",
            
        ]);

        $legislator = Legislator::find($id);
        $ending = date('Y-m-d', strtotime("+12 months", strtotime($request->input("starting"))));// adding 12 months for the ending

            if ($request->get('party') != "null") { // asking if the user didn't fill the party input

                $party = $request->get('party');

            }
            else {
                $automatic = 1;
                $party = "Azul";            }

        $legislator->name = $request->input('name'); // editing the legislator
        $legislator->surname = $request->input('surname');
        $legislator->email = $request->input('email');
        $legislator->cellphone = $request->input('cellphone');
        $legislator->votes = $request->input('votes');
        $legislator->address = $request->input('address');
        $legislator->country = $request->input('country');
        $legislator->starting = $request->input('starting');
        $legislator->ending = $ending;
        $legislator->party = $party;
            
        $legislator->save();

        return redirect()->route('display')->with('status', "Legislador editado con exito"); //saving an alert in the session
    }
}
