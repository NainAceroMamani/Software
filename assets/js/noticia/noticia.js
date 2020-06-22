var bandera = true;
$(function() {
    $btn_mostrar = $('#btnMostrar');
    $section_mostrar = $('#mostrar');
    $section_mostrar.hide();
    $btn_mostrar.click(function() {
        if (bandera) {
            bandera = false;
            $section_mostrar.show();
            $btn_mostrar[0].innerHTML = 'Mostrar menos';
        } else {
            bandera = true;
            $section_mostrar.hide();
            $btn_mostrar[0].innerHTML = 'Mostrar más';
        }
    });
});