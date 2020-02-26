<?php

namespace App\Http\Controllers;

use App\Cdmember;
use Illuminate\Http\Request;

class CdmemberController extends Controller
{

    public function showAllCdMember()
    {
        return response()->json(Cdmember::all());
    }

    public function create(Request $request)
     {
       $cdmember = new Cdmember;

       $cdmember->name= $request->name;
       $cdmember->address = $request->address;
       $cdmember->phone= $request->phone;
       $cdmember->ktp= $request->ktp;
       $cdmember->member_date= $request->member_date;
       $cdmember->active_date= $request->active_date;
       
       $cdmember->save();

       return response()->json($cdmember);
     }

     public function destroy($id)
     {
        $cdmember = Cdmember::find($id);
        $cdmember->delete();

         return response()->json('product removed successfully');
     }

     public function update(Request $request, $id)
     { 
       $cdmember= Cdmember::find($id);
       $cdmember->name= $request->name;
       $cdmember->address = $request->address;
       $cdmember->phone= $request->phone;
       $cdmember->ktp= $request->ktp;
       $cdmember->member_date= $request->member_date;
       $cdmember->active_date= $request->active_date;
        
    
        $cdmember->save();
        return response()->json($cdmember);
     }

  
}