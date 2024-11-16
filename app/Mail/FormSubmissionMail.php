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
                      ->with(['formData' => $this->formData]);

        // Adjuntar imágenes
        foreach ($this->imageUrls as $imageUrl) {
            $email->attach(public_path($imageUrl));
        }

        return $email;
    }
}
