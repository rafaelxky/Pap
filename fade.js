/* este  é um ficheiro externo */
/* script para criar a animação de fade quando a página tiver cabado de carregar */
/* lembrar que é preciso no style.css é preciso iniciar o ficheiro com 0 de opacidade e escondido usando o código seguinte*/
/*   
    body {
        display: none; 
        opacity: 0; 
        height: 100%;
    } 
*/

$(document).ready(function() {
    $("body").animate({
        show: 'toggle',
        opacity: '1',
        height: '100%',
    }, 500); 
});

console.log("O fade.js foi executado!");
