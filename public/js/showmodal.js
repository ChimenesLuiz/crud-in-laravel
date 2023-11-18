function mostrarModal(valor) {
  if (valor === 'mostrarModal') {
    // Mostrar o modal quando a opção 'TESTE' for selecionada
    var modal = new bootstrap.Modal(document.getElementById('exampleModal'));
    modal.show();
  }
}