<?php

namespace App\Http\Controllers;
use App\Artesano;
use Illuminate\Http\Request;

class ArtesanoController extends Controller
{
    public function guardar(Request $req){
        $nombre_a = $req['nombre_a'];
        $ap_a = $req['ap_a'];
        $am_a = $req['am_a'];
        $edad = $req['edad'];
        $telefono = $req['telefono'];
        $email = $req['email'];
        
        $art = new Artesano();
        $art->nombre_a =$nombre_a;
        $art->ap_a =$ap_a;
        $art->am_a =$am_a;
        $art->edad =$edad ;
        $art->telefono = $telefono;
        $art->email = $email;
        $art->save();
}
