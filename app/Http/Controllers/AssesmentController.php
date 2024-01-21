<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assesment;
class AssesmentController extends Controller
{
    //
    Public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Assesment::select('*'))
            ->addColumn('action', 'Assesment-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('assesments.index');
    }
 
    public function store(Request $request)
    {  
  
        $assesmentId = $request->id;
  
        $assesment   =   Assesment::updateOrCreate(
                    [
                     'id' => $assesmentId
                    ],
                    [
                    'risk_scenerio' => $request->risk_scenerio, 
                    'threat' => $request->threat,
                    'threat_prob' => $request->threat_prob,
                    'vulnerability' => $request->vulnerability,
                    'vulnerability_crit' => $request->vulnerability_crit,
                    'cia' => $request->cia,
                    'access' => $request->access,
                    'actors' => $request->actors,
                    'motive' => $request->motive,
                    'likelihood' => $request->likelihood,
                    'risk_val' => $request->risk_val
                    ]);    
                          
        return Response()->json($assesment);
    }
 
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $assesment  = Assesment::where($where)->first();
       
        return Response()->json($assesment);
    }
 
    public function destroy(Request $request)
    {
        $assesment = Assesment::where('id',$request->id)->delete();
       
        return Response()->json($assesment);
    }
}
