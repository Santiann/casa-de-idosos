$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        items: 1,  // Defina o número de itens visíveis no carrossel (neste caso, 1)
        loop: true, // Repetir o carrossel
        margin: 10, // Espaçamento entre os itens
        autoplay: true, // Ativar a reprodução automática
        autoplayTimeout: 3000, // Intervalo de tempo para a próxima imagem
    });
});
