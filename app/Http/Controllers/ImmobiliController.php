<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Immobli, Departement, Categorie, User, Modification};

class ImmobiliController extends Controller
{
    //
    /**
     * Function to fetch the details of 'immo' model
     */
    public function fetchDetails(Request $request) {
        $this->validate($request, [
            'codeAbar' => 'required'
        ]);
        /**@Param Immobili */
        
        return Immobli::query()
        ->where('codeAbar',$request->get('codeAbar'))
        ->get();

    }

}
