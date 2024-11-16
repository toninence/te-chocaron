<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FormSubmissionMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class FormsController extends Controller
{
    public function create()
    {
        return view('forms.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'imagenes' => 'array|max:5',
                'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'nombre' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'telefono' => 'required|string|max:255',
                'descripcion' => 'nullable|string',
            ]);

            $imageUrls = [];

            if ($request->hasFile('imagenes')) {
                foreach ($request->file('imagenes') as $image) {
                    $path = $image->store('images', 'public');
                    $imageUrls[] = '/storage/' . $path;
                }
            }

            $crashReport = new \App\Models\CrashReport();
            $crashReport->name = $request->input('nombre');
            $crashReport->email = $request->input('email');
            $crashReport->phone = $request->input('telefono');
            $crashReport->description = $request->input('descripcion');
            $crashReport->images = json_encode($imageUrls);
            $crashReport->save();

            $formData = $request->all();

            $emails = ['toninence@gmail.com'];

            foreach ($emails as $email) {
                try {
                    Mail::to($email)->send(new FormSubmissionMail($formData, $imageUrls));
                } catch (\Exception $e) {
                    Log::error('Error al enviar correo a ' . $email . ': ' . $e->getMessage());
                }
            }

            return redirect('/')->with('success', 'Sus datos han sido enviados correctamente. Nos pondremos en contacto con usted pronto. Gracias por confiar en nosotros.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
