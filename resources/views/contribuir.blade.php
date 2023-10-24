@extends('layouts.app')

@push('scripts')
<!-- Inclua os scripts do Owl Carousel (arquivos JS) -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/carousel.js') }}"></script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('styles/partials/contribuir.css') }}">
@endpush

@section('content')
<main>
    <div class="owl-carousel">
        <div class="carousel-item">
            <img src="{{ asset('images/imagem1.jpg') }}" alt="Imagem 1">
            <p>Conquistar</p>
            <p>Conquistar a qualidade de vida da pessoa <br>
                com deficiência física;</p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/imagem2.jpg') }}" alt="Imagem 2">
            <p>Integrar</p>
            <p>Integrar o usuário ao seu meio físico e social <br>
                a partir de seus esforços pessoais e da
                apropriação <br>
                do conhecimento
                gerado historicamente pela sociedade.
            </p>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/imagem3.jpg') }}" alt="Imagem 3">
            <p>Desenvolver</p>
            <p>Desenvolver programas de esclarecimentos e <br>
                sensibilização à comunidade sobre</p>
        </div>
    </div>
</main>
@endsection
