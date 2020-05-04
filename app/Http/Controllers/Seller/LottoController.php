<?php

namespace App\Http\Controllers\Seller;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Lotto;
use Illuminate\Http\Request;

class LottoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $lotto = Lotto::all();
        $lotto->announ_date = 55;
        dd($lotto);
        return view('seller.index', compact('lotto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('seller.lotto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        $requestData['announ_date'] = \Carbon\Carbon::parse($requestData['announ_date'])->format('Y-m-d');
        
        //dd($requestData);

        Lotto::create($requestData);
        return redirect('seller')->with('success', 'เพิ่มเลขเข้าระบบแล้วพร้อมลงขาย !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $lotto = Lotto::findOrFail($id);

        return view('lotto.show', compact('lotto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $lotto = Lotto::findOrFail($id);

        return view('lotto.edit', compact('lotto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $lotto = Lotto::findOrFail($id);
        $lotto->update($requestData);

        return redirect('lotto')->with('flash_message', 'Lotto updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Lotto::destroy($id);

        return redirect('lotto')->with('flash_message', 'Lotto deleted!');
    }
}
