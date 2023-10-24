@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('styles/partials/contato.css') }}">
@endpush

@section('content')
<main>
    <h1>Entre em Contato</h1>
    <p>Envie-nos uma mensagem e entraremos em contato em breve.</p>

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required></textarea>
        </div>
        <button class="send" type="submit">Enviar</button>
    </form>
</main>
@endsection
