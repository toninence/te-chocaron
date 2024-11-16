<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Formulario Enviado</title>
</head>
<body>
    <h1>Detalles del Formulario</h1>
    <p>Aquí están los detalles del formulario enviado:</p>
    <ul>
        @foreach($data as $key => $value)
            <li><strong>{{ $key }}:</strong> {{ is_array($value) ? implode(', ', $value) : $value }}</li>
        @endforeach
    </ul>

    <h2>Imágenes Adjuntas</h2>
    @if(!empty($imagePaths))
        <div>
            @foreach($imagePaths as $imagePath)
                <div>
                    <img src="{{ asset($imagePath) }}" alt="Imagen" style="max-width: 100%; height: auto;">
                </div>
            @endforeach
        </div>
    @else
        <p>No se han adjuntado imágenes.</p>
    @endif
</body>
</html>
