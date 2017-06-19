<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Anggaran;
use Auth;

class AnggaranController extends Controller
{
    public function input_anggaran_tahunan()
    {
    	return view('anggaran.input-anggaran-tahunan');
    }

    public function save_input_anggaran_tahunan()
    {
    	$tahun = Input::get('tahun');
    	$nominal = Input::get('nominal');
    	
    	$anggaran = new Anggaran;
    	$anggaran->tahun = $tahun;
    	$anggaran->nominal = $nominal;
    	if( Auth::check() ) {
    		$anggaran->pic = Auth::user()->get('id');
    	}
    	else {
    		$anggaran->pic = 0;
    	}
    	$anggaran->save();
    	return redirect('input-anggaran-tahunan');
    }
}
