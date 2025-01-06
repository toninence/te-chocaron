<!-- Mensajes de éxito o error -->
@if(session('success'))
<div class="alert alert-success m-0 text-center">{{ session('success') }}</div>
@endif
@if(session('error'))
<div class="alert alert-danger m-0 text-center">{{ session('error') }}</div>
@endif

