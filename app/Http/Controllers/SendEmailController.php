<?php

namespace App\Http\Controllers;

use App\Mail\FormularioMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function envio(Request $request)
    {

        $imagenes = [];

        foreach ($request->file('img') as $imagen) {
            $nombre = uniqid('img_').'.'.$imagen->getClientOriginalExtension();
            $imagen->storeAs('public/imgs', $nombre);
            $imagenes[] = $nombre;
        }
        
        $correo = new FormularioMailable(
            $request->name,
            $request->street,
            $request->code,
            $request->numext,
            $request->numint,
            $request->country,
            $request->description,
            $imagenes,
        );

        Mail::to('al222111269@gmail.com')->send( $correo );
    }
}
