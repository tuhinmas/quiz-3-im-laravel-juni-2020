<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;
class ArtikelController extends Controller
{
    //
    public function index(){
        $artikel = ArtikelModel::get_all();
        return view('layouts.artikel.konten', compact('artikel'));
   }

   public function form(){
       return view('layouts.artikel.form');
   }

   public function store(Request $request){
   // dd($request->all());
       $data = $request->all();
       $artikel = ArtikelModel::save($data);
    //    dd($artikel);
       if($artikel){
           return redirect('/artikel');
       }
   }
   public function show($id){
       $artikel = ArtikelModel::show_artikel($id);
        return view('layouts.artikel.detail', compact('artikel'));

       // dd($answer);
   }
   public function edit($id){
       $artikel = ArtikelModel::show_artikel($id);
       return view('layouts.artikel.edit', compact('artikel'));
   }
   public function update($id, Request $request){
       $artikel = ArtikelModel::update($id, $request -> all());
       return redirect('/artikel');
   }
   public function delete($id){
       $delete = ArtikelModel::destroy($id);
       return redirect('/artikel');
   }
}
