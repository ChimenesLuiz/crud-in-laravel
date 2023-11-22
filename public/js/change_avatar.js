function previewImage() {
    var input = document.getElementById('avatar');
    var preview = document.getElementById('avatarPreview');

    // Verificar se um arquivo foi selecionado
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        // Configurar o evento de carregamento da imagem
        reader.onload = function (e) {
            // Atualizar o atributo src da tag <img> com a imagem carregada
            preview.src = e.target.result;
        };

        // Ler o conteúdo do arquivo como uma URL de dados
        reader.readAsDataURL(input.files[0]);

        // Exibir a tag <img>
        preview.style.display = 'block';
    } else {
        // Ocultar a tag <img> se nenhum arquivo for selecionado
        preview.style.display = 'none';
    }
}