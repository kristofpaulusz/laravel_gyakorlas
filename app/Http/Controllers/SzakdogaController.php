<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Szakdoga;
use Illuminate\Http\Request;

class SzakdogaController extends Controller
{
    public function index() {
        return Szakdoga::all();
    }

    public function show($id) {
        return Szakdoga::find($id);
    }
    public function destroy($id) {
        Szakdoga::find($id)->delete();
        return back();
    }
    public function update(Request $request, $id) {
        $szakdoga = Szakdoga::find($id);
        $szakdoga->szakdoga_nev = $request->szakdoga_nev;
        $szakdoga->githublink = $request->githublink;
        $szakdoga->oldallink = $request->oldallink;
        $szakdoga->tagokneve = $request->tagokneve;
        $szakdoga->save();
        return back();
    }
    public function store(Request $request) {
        $szakdoga = new Szakdoga();
        $szakdoga->szakdoga_nev = $request->szakdoga_nev;
        $szakdoga->githublink = $request->githublink;
        $szakdoga->oldallink = $request->oldallink;
        $szakdoga->tagokneve = $request->tagokneve;
        $szakdoga->save();
        return back();
    }
}
