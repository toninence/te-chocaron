<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $imageUrls;

    public function __construct($formData, $imageUrls)
    {
        $this->formData = $formData;
        $this->imageUrls = $imageUrls;
    }

    public function build()
    {
        $email = $this->subject('Nuevo Formulario Enviado')
                      ->view('emails.form_submission')
                      ->with(['data' => $this->formData]);

        // Adjuntar imágenes
        foreach ($this->imageUrls as $imageUrl) {
            $email->attach(storage_path('app/public/images/' . $imageUrl));
        }

        return $email;
    }
}
