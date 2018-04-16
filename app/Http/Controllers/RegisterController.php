<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use Yajra\Datatables\Datatables;

class RegisterController extends Controller
{
   	public function __construct()
    {
        $this->response = ['code' => 0, 'message' => 'OK', 'success' => true];
    }

    public function index()
    {
	        
        return view('pages.register');
    }

    public function dt() {
        $data = Register::query();
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" onclick="editmodal(this)" href="javascript:void(0);"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Edit</a>'.
                    '&nbsp;&nbsp;'.
                    '<a class="btn btn-sm btn-danger btn-delete" data-id="'.$data->id .'" onclick="delajax(this)"  href="javascript:void(0);"><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</a>';
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->input('id')==""){
    		$c = new Profil;
    		$check = Profil::find(1)
    				->first();
    		if(!empty($check)) {
    			$c = Profil::find(1);
    		}
    	}else{
    		$c = Profil::find($request->input('id'));
    	}            
        $c->history = $request->input('history');
        $c->visi = $request->input('visi');
        $c->misi = $request->input('misi'); 
        $c->service_desc = $request->input('service_desc'); 
        $c->trading_desc = $request->input('trading_desc'); 
        $c->chartering_desc = $request->input('chartering_desc'); 
        $c->csm_desc = $request->input('csm_desc'); 
        $c->transportation_desc = $request->input('transportation_desc');        
	    $c->save();
	    $insertedId = $c->id;
	    return redirect('profil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
