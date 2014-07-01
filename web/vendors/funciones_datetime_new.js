var fecha = $('#buseta_informestock_autobus_fecha').pickadate({
    format: 'dd/mm/yyyy',
    formatSubmit: 'dd/mm/yyyy'
});
var fecha_pedido = $('#buseta_tallerbundle_compra_fecha_pedido').pickadate({
    format: 'dd/mm/yyyy',
    formatSubmit: 'dd/mm/yyyy'
});
var autobus_fecha_ingreso = $('#buseta_databundle_autobus_fecha_ingreso').pickadate({
    format: 'dd/mm/yyyy',
    formatSubmit: 'dd/mm/yyyy'
});
var autobus_valido_hasta = $('#buseta_databundle_autobus_valido_hasta').pickadate({
    format: 'dd/mm/yyyy',
    formatSubmit: 'dd/mm/yyyy'
});

var picker = autobus_fecha_ingreso.pickadate('picker');
var $fechaIngreso;

if(picker != null)
{
    picker.on('close', function(){
        $fechaIngreso = this.get('select','dd/mm/yyyy');
        var splt = $fechaIngreso.split('/');
        var entero = parseInt(splt[2]);
        entero+=15;
        splt[2] = entero.toString();

        $fechaIngreso = splt.join('/');

        var picker2 = autobus_valido_hasta.pickadate('picker');
        picker2.set('select', $fechaIngreso, { format: 'dd/mm/yyyy' });
    });
}

var fecha = $('#buseta_informestock_autobus_fecha').val();
$('input:hidden[name^="buseta_informestock_autobus[fecha]_submit"]').val(fecha);

var valido = $('#buseta_databundle_autobus_valido_hasta').val();
$('input:hidden[name^="buseta_databundle_autobus[valido_hasta]_submit"]').val(valido);

var fechaingreso = $('#buseta_databundle_autobus_fecha_ingreso').val();
$('input:hidden[name^="buseta_databundle_autobus[fecha_ingreso]_submit"]').val(fechaingreso);

var fechapedido = $('#buseta_tallerbundle_compra_fecha_pedido').val();
$('input:hidden[name^="buseta_tallerbundle_compra[fecha_pedido]_submit"]').val(fechapedido);

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
        $('textarea#buseta_databundle_autobus_barras').val("");
        $('textarea#buseta_databundle_autobus_barras').fadeOut();
        $('label#barras').fadeOut();
    }else{
        $('textarea#buseta_databundle_autobus_barras').fadeIn();
        $('label#barras').fadeIn();
    }

    if(!rampas){
        $('textarea#buseta_databundle_autobus_rampas').val("");
        $('textarea#buseta_databundle_autobus_rampas').fadeOut();
        $('label#rampas').fadeOut();
    }else{
        $('textarea#buseta_databundle_autobus_rampas').fadeIn();
        $('label#rampas').fadeIn();
    }

    if(!camaras){
        $('textarea#buseta_databundle_autobus_camaras').val("");
        $('textarea#buseta_databundle_autobus_camaras').fadeOut();
        $('label#camaras').fadeOut();
    }else{
        $('textarea#buseta_databundle_autobus_camaras').fadeIn();
        $('label#camaras').fadeIn();
    }

    if(!publicidad){
        $('textarea#buseta_databundle_autobus_publicidad').val("");
        $('textarea#buseta_databundle_autobus_publicidad').fadeOut();
        $('label#publicidad').fadeOut();
    }else{
        $('textarea#buseta_databundle_autobus_publicidad').fadeIn();
        $('label#publicidad').fadeIn();
    }

    if(!gps){
        $('textarea#buseta_databundle_autobus_gps').val("");
        $('textarea#buseta_databundle_autobus_gps').fadeOut();
        $('label#gps').fadeOut();
    }else{
        $('textarea#buseta_databundle_autobus_gps').fadeIn();
        $('label#gps').fadeIn();
    }

    if(!wifi){
        $('textarea#buseta_databundle_autobus_wifi').val("");
        $('textarea#buseta_databundle_autobus_wifi').fadeOut();
        $('label#wifi').fadeOut();
    }else{
        $('textarea#buseta_databundle_autobus_wifi').fadeIn();
        $('label#wifi').fadeIn();
    }

    if(!lector){
        $('textarea#buseta_databundle_autobus_lector_cedulas').val("");
        $('textarea#buseta_databundle_autobus_lector_cedulas').fadeOut();
        $('label#lector').fadeOut();
    }else{
        $('textarea#buseta_databundle_autobus_lector_cedulas').fadeIn();
        $('label#lector').fadeIn();
    }


}





