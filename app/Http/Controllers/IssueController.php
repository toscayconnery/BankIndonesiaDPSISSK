<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Auth;
use App\Issue;
use DB;

class IssueController extends Controller
{
    public function list_issue()
    {
        $this->data['issue'] = DB::select('SELECT i.* FROM issue i 
                                            WHERE i.status = "On Progress" 
                                            OR i.status = "Pending" 
                                            ORDER BY i.created_at DESC');
        //dd($this->data['issue']);
        return view('issue.list-issue', $this->data);
    }

    public function list_all_issue()
    {
        $this->data['issue'] = DB::select('SELECT i.* FROM issue i 
                                            ORDER BY i.created_at DESC');
        return view('issue.list-all-issue', $this->data);
    }

    public function input_issue()
    {
    	return view('issue.input-issue');
    }

    public function edit_issue($id)
    {
        $this->data['issue'] = DB::select('SELECT i.* FROM issue i WHERE i.id = '.$id)[0];
    	return view('issue.edit-issue', $this->data);
    }

    public function cari_issue()
    {   
        $tahun = Input::get('tahuncari');
        $judul = Input::get('judulcari');
        $this->data['adacari'] = 1;
        $this->data['adadata'] = 1;
        if($tahun!=NULL && $judul!=NULL)
        {
            $this->data['issue'] = DB::table('issue')
            ->where(DB::raw('YEAR(created_at)'), $tahun)
            ->where('judul', 'LIKE', '%' . $judul . '%')
            ->get();
            if(!isset($this->data['issue']))
            {
                 $this->data['adadata'] = 0;
            }
        }
        else if($tahun!=NULL && $judul==NULL)
        {
            $this->data['issue'] = DB::table('issue')
            ->where(DB::raw('YEAR(created_at)'), $tahun)
            ->get();
            if(!isset($this->data['issue']))
            {
                 $this->data['adadata'] = 0;
            }
        }
        else if($tahun==NULL && $judul!=NULL)
        {
            $this->data['issue'] = DB::table('issue')
            ->where('judul', 'LIKE', '%' . $judul . '%')
            ->get();
            if(!isset($this->data['issue']))
            {
                 $this->data['adadata'] = 0;
            }
        }
        else if($tahun==NULL && $judul==NULL)
        {
            $this->data['adadata'] = 0;
            $this->data['adacari'] = 0;
        }
        
        return view('issue.list-all-issue-search', $this->data);
    }

    public function save_input_issue()
    {   
    	$issue = new Issue;
        $issue->judul = Input::get('judul');
        $issue->isi = Input::get('isi');
        if( Auth::check() ){
            $issue->pic = Auth::user()->name;
        }
        else{
            $issue->pic = 'Unknown';
        }
        $issue->status = 'Pending';
        $issue->save();
        return redirect('list-issue');
    }

    public function save_edit_issue($id)
    {
    	$issue = Issue::find($id);
        $issue->judul = Input::get('judul');
        $issue->isi = Input::get('isi');
        $issue->status = Input::get('status');
        $issue->tindak_lanjut = Input::get('tindak_lanjut');
        if( Auth::check() ){
            $issue->pic_tindak_lanjut = Auth::user()->name;
        }
        else{
            $issue->pic_tindak_lanjut = "Unknown";
        }
        $issue->save();
        return redirect('list-issue');
    }
}
