<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Legislator;

class LegislatorController extends Controller
{
    public function display()
    {
        $legislators = Legislator::paginate(10);
        return view('dashboard', compact('legislators'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [ //validating the inputs (email->unique)
            "name" => 'required',
            "surname"  => 'required',
            "email" => 'required|unique:legislators',
            "cellphone" => 'required|integer',
            "votes" => "integer",
            "country" => "required|string",
            "starting" => "required|date",
            
        ]);

        $ending = date('Y-m-d', strtotime("+12 months", strtotime($request->input("starting"))));// adding 12 months for the ending

            if ($request->input('party') == 0) { // asking if the user didn't fill the party input
                $automatic = 1;
                $party = "Azul";
            }
            else {
                $party = $request->input('party');
            }


        $legislator = new Legislator([
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


        return redirect('/')->with('status', 'Legislador subido a la base de datos!');
    }

    public function destroy($id){
            $legislator = Legislator::find($id);
            $legislator->delete();
            $legislators = Legislator::all();

            return redirect()->route('display')->with('status', "Legislador eliminado con exito");
    }
}
