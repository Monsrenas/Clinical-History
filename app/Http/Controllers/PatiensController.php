<?php

namespace App\Http\Controllers;

use App\Patien;

use Illuminate\Http\Request;

class PatiensController extends Controller
{
    //
     
    public function create()
    {
        return view('books.patien');
    }
    public function store(Request $request)
    {
        $car=new Car();
        $car->carcompany = $request->get('carcompany');
        $car->model = $request->get('model');
        $car->price = $request->get('price');        
        $car->save();
        return redirect('car')->with('success', 'Car has been successfully added');
    }
    public function index()
    {
        $cars=Car::all();
        return view('carindex',compact('cars'));
    }
    public function edit($id)
    {
        $car = Car::find($id);
        return view('caredit',compact('car','id'));
    }
    public function update(Request $request, $id)
    {
        $car= Car::find($id);
        $car->carcompany = $request->get('carcompany');
        $car->model = $request->get('model');
        $car->price = $request->get('price');        
        $car->save();
        return redirect('car')->with('success', 'Car has been successfully update');
    }
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('car')->with('success','Car has been  deleted');
    }
}

/*
						    'date',
							'identification' 
							'surname',
							'name',
							'sex',
							'DOB',
							'nationality',
							'maritalStts',
							'addres',
							'telephone',
							'email',
							'nxOfKin',
							'relationship', 
							'contact'


							public function create(Request $request)
    {
        /*$Patien = new Patien();*/
        return view('books.patien');
    }


    public function store(Request $request)
    {
        request()->validate([
            'identification' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'DOB' => 'required',
        ]);
        return
    	
        /*$Patien = new Patien();

        $Patien::create($request->all());*/

        /*return redirect()->route('books.index')
                        ->with('success','Book created successfully.');
          */
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Patien $patien)
    {
         request()->validate([
           'identification' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'DOB' => 'required',
        ]);
    	return
        /*$patien->update($request->all());

        return redirect()->route('books.index')
                        ->with('success','Book updated successfully');*/
    
    }

*/