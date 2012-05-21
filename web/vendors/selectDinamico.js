$('#buseta_databundle_autobus_modelo').attr('disabled','disabled');

$marca = $('#buseta_databundle_autobus_marca');
$modelo = $('select#buseta_databundle_autobus_modelo');

bindElements()

//MODELOS
var modelos = {
    search: function(idMarca){
        $('#buseta_databundle_autobus_modelo').removeAttr('disabled');

        var modelos = json[idMarca];
        var modelos = modelos.childrens;

        //console.log(modelos);
        $modelo.find('option').remove();
        $.each(modelos, function(key, value){
            var option = $('<option value="' + key + '">' + value + '</option>');
            $modelo.append(option);
        });
    },
    loadSelect: function(json){
        if(json.length > 0){
            $.each(json, function(key, item){
                //console.log(item);
                option = $('<option value="'+item.id+'">'+item.valor+'</option>');
                $modelo.append(option);
            });
        }else{
            alert('Error');
        }
    }


};

function bindElements(){
    //Evento onchante Marca para recargar Modelo
    $marca.change(function(){
        idMarca = $(this).find('option:selected').val();
        modelos.search(idMarca);
    });
}




