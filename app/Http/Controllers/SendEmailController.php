<?php

namespace App\Http\Controllers;

use App\Mail\FormularioMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function envio(Request $request)
    {
        $ruta = $request->img->store('public/imgs');
        $ruta2 = str_replace('public/imgs/', '', $ruta);
        
        $correo = new FormularioMailable(
            $request->name,
            $request->street,
            $request->code,
            $request->numext,
            $request->numint,
            $request->country,
            $request->description,
            $request->img,
        );
        Mail::to('al222111269@gmail.com')->send( $correo );
    }
}
