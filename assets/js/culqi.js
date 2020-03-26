<!-- Incluye Culqi Checkout en tu sitio web-->
<script>
    // Configura tu llave pública
    Culqi.publicKey = '{{ publicKey }}';
    // Configura tu Culqi Checkout
    Culqi.settings({
        title: 'Culqi Store',
        currency: 'PEN',
        description: '{{record.nombre}}',
        amount: {{record.precio}}
    });
    // Usa la funcion Culqi.open() en el evento que desees
    $('#BtnWillyShop').on('click', function(e) {
        // Abre el formulario con la configuración en Culqi.settings
        Culqi.open();
        e.preventDefault();
    });
</script>
