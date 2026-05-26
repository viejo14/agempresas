<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Muestra la página principal del sitio web.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Muestra la página de AG Servicios.
     *
     * @return \Illuminate\View\View
     */
    public function servicios()
    {
        return view('servicios');
    }

    /**
     * Muestra la página de Quiénes Somos.
     *
     * @return \Illuminate\View\View
     */
    public function quienesSomos()
    {
        return view('quienes-somos');
    }

    /**
     * Procesa y valida el envío del formulario de contacto mediante AJAX.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submitContact(Request $request)
    {
        // Reglas de validación
        $rules = [
            'name'    => 'required|string|min:3|max:100',
            'email'   => 'required|email|max:100',
            'subject' => 'required|string|min:9|max:15', // Teléfono en AG Empresas
            'message' => 'required|string|min:10',
        ];

        // Mensajes personalizados en español
        $messages = [
            'name.required'    => 'Por favor, ingrese su nombre completo.',
            'name.min'         => 'El nombre debe tener al menos 3 caracteres.',
            'email.required'   => 'Por favor, ingrese su correo electrónico.',
            'email.email'      => 'Por favor, ingrese un correo electrónico válido.',
            'subject.required' => 'Por favor, ingrese su número de teléfono.',
            'subject.min'      => 'El teléfono debe tener al menos 9 dígitos.',
            'message.required' => 'Por favor, ingrese su consulta.',
            'message.min'      => 'La consulta debe tener al menos 10 caracteres.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()->all()
            ], 422);
        }

        // Aquí se procesaría el envío del correo (por ejemplo, Mail::to(...)->send(...))
        // o se guardaría en la base de datos (por ejemplo, Contact::create(...))

        return response()->json([
            'success' => true,
            'message' => '¡Su consulta se ha enviado con éxito!, un ejecutivo se contactará con usted a la brevedad.'
        ], 200);
    }
}
