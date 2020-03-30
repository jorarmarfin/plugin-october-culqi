    //Incluye Culqi Checkout en tu sitio web

    var v_publickey = $('#publicKey').val();
    var v_curso = $('#curso').val();
    var v_title = $('#title').val();
    var v_currency = $('#currency').val();
    var v_description = $('#description').val();
    var v_amount = $('#amount').val();
    // Configura tu llave pública
    Culqi.publicKey = v_publickey;
    // Configura tu Culqi Checkout
    Culqi.settings({
        title: v_title,
        currency: v_currency,
        description: v_description,
        amount:v_amount
    });
    // Usa la funcion Culqi.open() en el evento que desees
    $('#buyButton').on('click', function(e) {
        // Abre el formulario con la configuración en Culqi.settings
        Culqi.open();
        e.preventDefault();
    });
    console.log('0.10');
    function culqi() {
        if (Culqi.token) { // ¡Objeto Token creado exitosamente!
            console.log(Culqi.token.id)
            $.request('onCrearCargo',{
                data:{
                    curso:v_curso,
                    precio:v_amount,
                    moneda:v_currency,
                    email:Culqi.token.email,
                    token:Culqi.token.id,
                },
                // success: function(data) {
                //     console.log(data.result);
                // }
                update:{ 'Pasarela::message':'#myDiv'}
            })

        } else { // ¡Hubo algún problema!
            // Mostramos JSON de objeto error en consola
            console.log(Culqi.error);
            alert(Culqi.error.user_message);
        }
      };
