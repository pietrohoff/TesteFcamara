
// Captura os elementos alvo e o lightbox
const infoEq = document.getElementById('info-eq');
const infoStrictEq = document.getElementById('info-strict-eq');
const lightboxInfoEq = document.getElementById('lightbox-info-eq');
const lightboxInfoStrictEq = document.getElementById('lightbox-info-strict-eq');
const fecharLightboxInfoEq = document.getElementById('fechar-lightbox-info-eq');
const fecharLightboxInfoStrictEq = document.getElementById('fechar-lightbox-info-strict-eq');
const botaoExecutarConcatenar = document.getElementById('executar-exemplo-concatenar');
const botaoExecutarInclude = document.getElementById('executar-exemplo-include');
const botaoExecutarVazio = document.getElementById('executar-exemplo-vazio');
const botaoExecutarRemover = document.getElementById('executar-exemplo-remover');
const botaoExecutarLogger = document.getElementById('executar-exemplo-logger');
const botaoExecutarJoin = document.getElementById('executar-exemplo-join');

// Adiciona um evento de clique sobre o elemento alvo '=='
infoEq.addEventListener('click', () => {
    lightboxInfoEq.style.display = 'block';
});

// Adiciona um evento de clique sobre o elemento alvo '==='
infoStrictEq.addEventListener('click', () => {
    lightboxInfoStrictEq.style.display = 'block';
});

// Adiciona um evento de clique no botão de fechar para os  dois elementos alvos 
fecharLightboxInfoEq.addEventListener('click', () => {
    lightboxInfoEq.style.display = 'none';
});

// Adiciona um evento de clique no botão de fechar para os  dois elementos alvos 
fecharLightboxInfoStrictEq.addEventListener('click', () => {
    lightboxInfoStrictEq.style.display = 'none';
});

// Adiciona um evento de clique ao botão 'executar-exemplo-concatenar'
botaoExecutarConcatenar.addEventListener('click', function () {
    window.location.href = './php/exemplo_concatenar.php';
});

// Adiciona um evento de clique ao botão 'executar-exemplo-concatenar'
botaoExecutarInclude.addEventListener('click', function () {
    window.location.href = './php/exemplo_include.php';
});

// Adiciona um evento de clique ao botão 'executar-exemplo-vazio'
botaoExecutarVazio.addEventListener('click', function () {
    window.location.href = './php/exemplo_vazio.php';
});

// Adiciona um evento de clique ao botão 'executar-exemplo-remover'
botaoExecutarRemover.addEventListener('click', function () {
    window.location.href = './php/exemplo_remover.php';
});

// Adiciona um evento de clique ao botão 'executar-exemplo-logger'
botaoExecutarLogger.addEventListener('click', function () {
    window.location.href = './php/exemplo_logger.php';
});

// Adiciona um evento de clique ao botão 'executar-exemplo-logger'
botaoExecutarJoin.addEventListener('click', function () {
    window.location.href = './php/exemplo_join.php';
});




