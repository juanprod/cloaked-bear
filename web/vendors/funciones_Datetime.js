$('#buseta_databundle_autobus_valido_hasta').datepicker();
$('#buseta_databundle_autobus_fecha_rtv').datepicker();

localChange()
$("input#barras").click(localChange);
$("input#rampas").click(localChange);
$("input#camaras").click(localChange);
$("input#lector").click(localChange);
$("input#publicidad").click(localChange);
$("input#gps").click(localChange);
$("input#wifi").click(localChange);

function localChange(){
    barras = $("input#barras:checked").is(":empty");
    rampas = $("input#rampas:checked").is(":empty");
    camaras = $("input#camaras:checked").is(":empty");
    publicidad = $("input#publicidad:checked").is(":empty");
    gps = $("input#gps:checked").is(":empty");
    wifi = $("input#wifi:checked").is(":empty");
    lector = $("input#lector:checked").is(":empty");

    if(!barras){
        $('input#buseta_databundle_autobus_barras').fadeOut();
        $('label#barras').fadeOut();
    }else{
        $('input#buseta_databundle_autobus_barras').fadeIn();
        $('label#barras').fadeIn();
    }

    if(!rampas){
        $('input#buseta_databundle_autobus_rampas').fadeOut();
        $('label#rampas').fadeOut();
    }else{
        $('input#buseta_databundle_autobus_rampas').fadeIn();
        $('label#rampas').fadeIn();
    }

    if(!camaras){
        $('input#buseta_databundle_autobus_camaras').fadeOut();
        $('label#camaras').fadeOut();
    }else{
        $('input#buseta_databundle_autobus_camaras').fadeIn();
        $('label#camaras').fadeIn();
    }

    if(!publicidad){
        $('input#buseta_databundle_autobus_publicidad').fadeOut();
        $('label#publicidad').fadeOut();
    }else{
        $('input#buseta_databundle_autobus_publicidad').fadeIn();
        $('label#publicidad').fadeIn();
    }

    if(!gps){
        $('input#buseta_databundle_autobus_gps').fadeOut();
        $('label#gps').fadeOut();
    }else{
        $('input#buseta_databundle_autobus_gps').fadeIn();
        $('label#gps').fadeIn();
    }

    if(!wifi){
        $('input#buseta_databundle_autobus_wifi').fadeOut();
        $('label#wifi').fadeOut();
    }else{
        $('input#buseta_databundle_autobus_wifi').fadeIn();
        $('label#wifi').fadeIn();
    }

    if(!lector){
        $('input#buseta_databundle_autobus_lector_cedulas').fadeOut();
        $('label#lector').fadeOut();
    }else{
        $('input#buseta_databundle_autobus_lector_cedulas').fadeIn();
        $('label#lector').fadeIn();
    }


}





