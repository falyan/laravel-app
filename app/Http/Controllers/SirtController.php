<?php

namespace App\Http\Controllers;
use App\Models\SirtModel;
use App\Http\Controllers\SirtController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class SirtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('User.v_user-index',compact ('datas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->has('search'))
        {
            $datas = SirtModel::where('alat','LIKE','%' .$request->search. '%')->paginate(5);
        }
        else
        {
            $datas = SirtModel::sortable()->paginate(5);
        }
        
        return view('User.v_list', compact ('datas'));
        
    }


    public function index2(Request $request)
    {
        if ($request->has('search'))
        {
            $datas = SirtModel::where('alat','LIKE','%' .$request->search. '%')->paginate(5);
        }
        else
        {
            $datas = SirtModel::sortable()->paginate(5);
        }
        return view('Penanggung-Jawab.v_kotak-masuk', compact ('datas'));
       // return view('Penanggung-Jawab.v_kotak-masuk')->with('datas',$datas);
    }

    public function dataTerkini()
    {
        $datas = SirtModel::sortable()->paginate(5);
        return view('User.v_user-index', compact ('datas'));

    }


    public function insertdata(Request $request)
    {
        $datas = SirtModel::create($request->all());
        if($request->hasfile('evidence')){
            $request->file('evidence')->move('evidence/', $request->file('evidence')->getClientOriginalName());
            $datas->evidence = $request->file('evidence')->getClientOriginalName();
            $datas->save();
        }

        return back();
    }


    public function tampilkandata($id)
    {
        $datas = SirtModel::find($id);
        //dd($datas);
       return view('User.v_tampilkandata', compact ('datas'));

    }

    public function tampilkandata2($id)
    {
        $datas = SirtModel::find($id);
        //dd($datas);
       return view('Penanggung-Jawab.v_tampilkandata2', compact ('datas'));

    }

    public function tampilkandata3($id)
    {
        $datas = SirtModel::find($id);
        //dd($datas);
       return view('Penanggung-Jawab.v_proses-timeline', compact ('datas'));

    }

    public function test($id) //test if update proses
    {
        $datas = SirtModel::find($id);
        //dd($datas);
       return view('Penanggung-Jawab.v_proses-timeline3', compact ('datas'));

    }

    public function tampilkandata4($id)
    {
        $datas = SirtModel::find($id);
        //dd($datas);
       return view('Penanggung-Jawab.v_proses-timeline1', compact ('datas'));

    }

    public function tampilkandata5($id)
    {
        $datas = SirtModel::find($id);
        //dd($datas);
       return view('Penanggung-Jawab.v_proses-timeline2', compact ('datas'));

    }

    public function tampilkandataAktivitas($id)
    {
        $datas = SirtModel::find($id);
        return view('User.v_aktivitas', compact ('datas'));

    }

    
    public function userAktivitas()
    {
        $datas = SirtModel::sortable()->paginate(5);
        return view('User.v_aktivitas-list', compact ('datas'));
    }


    public function pjaktifitas()
    {
        $datas = SirtModel::sortable()->paginate(5);
        return view('Penanggung-Jawab.v_pj-aktifitas', compact ('datas'));
    }


    public function updatedata(Request $request, $id)
    {
        $datas = SirtModel::find($id);
        $datas->update($request->all());
        if($request->hasfile('evidence')){
            $request->file('evidence')->move('evidence/', $request->file('evidence')->getClientOriginalName());
            $datas->evidence = $request->file('evidence')->getClientOriginalName();
            $datas->save();
        }
        return back();
        
    }

    public function updatedata2(Request $request, $id)
    {
        $datas = SirtModel::find($id);
        $datas->update($request->all());
        if($request->hasfile('foto2')){
            $request->file('foto2')->move('proses/', $request->file('foto2')->getClientOriginalName());
            $datas->foto2 = $request->file('foto2')->getClientOriginalName();
            $datas->save();
        }
        return back();
        
    }

    public function updatedata3(Request $request, $id)
    {
        $datas = SirtModel::find($id);
        $datas->update($request->all());
        if($request->hasfile('foto3')){
            $request->file('foto3')->move('proses-selesai/', $request->file('foto3')->getClientOriginalName());
            $datas->foto3 = $request->file('foto3')->getClientOriginalName();
            $datas->save();
        }
        return back();
        
    }



    public function delete($id)
    {
        $datas = SirtModel::find($id);
        $datas->delete();
        return back();

    }

    public function store(Request $request)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
