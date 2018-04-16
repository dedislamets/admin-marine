<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajuan;
use Yajra\Datatables\Datatables;

class PengajuanController extends Controller
{
    public function __construct()
    {
        $this->response = ['code' => 0, 'message' => 'OK', 'success' => true];
    }

    public function index()
    {
	        
        return view('pages.pengajuan');
    }
    public function sign_a()
    {
            
        return view('pages.pengajuan-sign-a');
    }
    public function sign_b()
    {
            
        return view('pages.pengajuan-sign-b');
    }
    public function meetup()
    {
            
        return view('pages.pengajuan-meetup');
    }
    public function deal()
    {
            
        return view('pages.pengajuan-deal');
    }

    public function dt_waiting() {
        $data = Pengajuan::where('status','=','Waiting Verification');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" onclick="editmodal(this)" href="javascript:void(0);"><i class="fa fa-book"></i>&nbsp;&nbsp;Preview</a>';
            })
            ->make(true);
    }
    public function dt_sign_1() {
        $data = Pengajuan::where('status','=','Sign 1');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" onclick="editmodal(this)" href="javascript:void(0);"><i class="fa fa-papers"></i>&nbsp;&nbsp;Preview</a>';
            })
            ->make(true);
    }
    public function dt_sign_2() {
        $data = Pengajuan::where('status','=','Sign 2');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" onclick="editmodal(this)" href="javascript:void(0);"><i class="fa fa-papers"></i>&nbsp;&nbsp;Preview</a>';
            })
            ->make(true);
    }
    public function dt_meet() {
        $data = Pengajuan::where('status','=','On Schedule');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" onclick="editmodal(this)" href="javascript:void(0);"><i class="fa fa-papers"></i>&nbsp;&nbsp;Preview</a>';
            })
            ->make(true);
    }
    public function dt_deal() {
        $data = Pengajuan::where('status','=','Finish');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" onclick="editmodal(this)" href="javascript:void(0);"><i class="fa fa-papers"></i>&nbsp;&nbsp;Preview</a>';
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
