import './bootstrap';
import $ from 'jquery';
window.$ = window.jQuery = $;

// Agora você pode usar o jQuery normalmente
$(document).ready(function() {
    console.log('jQuery está funcionando!');
});