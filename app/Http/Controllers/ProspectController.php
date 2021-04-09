<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;

class ProspectController extends Controller
{
    public function getProspect(){
        return response()->json(Prospect::all(), 200);
     }
    
    public function getProspectById($id) {
        $Prospect = Prospect::find($id);
        if(is_null($Prospect)) {
            return response()->json(['message' => 'Prospect Not Found'], 404);
        }
        return response()->json($Prospect::find($id), 200);
    }

    public function addProspect(Request $request) {
        $Prospect = Prospect::create($request->all());
        return response($Prospect, 201);
    }

    public function updateProspect(Request $request, $id) {
        $Prospect = Prospect::find($id);
        if(is_null($Prospect)) {
            return response()->json(['message' => 'Prospect Not Found'], 404);
        }
        $Prospect->update($request->all());
        return response($Prospect, 200);
    }

    public function deleteProspect(Request $request, $id) {
        $Prospect = Prospect::find($id);
        if(is_null($Prospect)) {
            return response()->json(['message' => 'Prospect Not Found'], 404);
        }
        $Prospect->delete();
        return response()->json(['message' => 'Prospect deleted '], 204);
    }

}
