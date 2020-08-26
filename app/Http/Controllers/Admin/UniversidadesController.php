<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Universidade\Universidade;
use App\Http\Requests\UniversidadeFormRequest;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class UniversidadesController extends Controller
{
    private $page = 5;

    public function index()
    {
        $universidades = Universidade::paginate($this->page);
        return view('admin.universidades', compact('universidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.universidades');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UniversidadeFormRequest $request)
    {
        $universidades = new Universidade;
        $universidades->nm_universidade = $request->nm_universidade;
        $universidades->save();

        return redirect()->route('admin.universidades');
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
        Universidade::find($id)->delete();
        return view('admin.universidades');
    }
}
