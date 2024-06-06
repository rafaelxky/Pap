// Função para abrir a imagem numa modal quando clicada
function openImage(event) {
    console.log("Imagem clicada!");
    // Obter o caminho da imagem a partir do atributo 'data-image' do elemento clicado
    var imagePath = $(event.target).data('image');
    // Definir o caminho da imagem na tag 'src' do elemento modal
    $('#modalImage').attr('src', imagePath);
    // Mostrar a modal
    $('#imageModal').modal('show');
}

// Quando uma imagem com a classe 'clickable' é clicada, executar a função openImage
$(document).ready(function() {
    $('.clickable').click(openImage);
});

// Mensagem de console para verificar se o script foi executado com sucesso
console.log("O mostrar.js foi executado!");
