<?php

namespace App\Models  ;

use Illuminate\Support\Facades\DB;
class ArtikelModel { 
    //
    public static function get_all(){
        $artikel = DB::table('artikel') ->get();
        return $artikel;
    }

    public static function save($data){
        unset($data["_token"]);
        date_default_timezone_set("Asia/Jakarta");
        $current_date_time = date('Y-m-d H:i:s');
        $data = array_merge($data, ["created_at" =>$current_date_time,
                                    "updated_at" =>$current_date_time,
                                    "slug" =>"",
                                    "tag" =>"",
                                    "user_id" =>3]
                                );
        $new_artikel = $data;
        $new_artikel = DB::table('artikel') -> insert($data);
        return $new_artikel;
    }
    public static function show_artikel($id){
        $artikel = DB::table('artikel') -> where('id',$id) ->first();
        return $artikel;
    }
    public static function update($artikel_id, $request){
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date('Y-m-d H:i:s');
        $artikel = DB::table('artikel') 
                        -> where('id', $artikel_id)
                        -> update([
                            'judul' => $request['judul'],
                            'isi' => $request['isi'],
                            'updated_at' => $tanggal
                        ]);
    }
    public static function destroy($artikel_id){
        $delete = DB::table('artikel')
                        ->where('id',$artikel_id)
                        ->delete();
        return $delete;
    }
}
