@extends('layouts.plantilla')
@section('contenidoPoliticaDePrivacidad')
<style>
    /* Estilo para el fondo */
    body {
        background-image: url('{{ asset('img/terminos.jpg') }}'); 
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed; 
        font-family: Arial, sans-serif;
    }

    /* Estilo para el contenedor principal */
    .privacy-policy {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 40px auto;
        max-width: 800px;
        line-height: 1.6;
    }

    /* Estilo para los encabezados */
    .privacy-policy h1, 
    .privacy-policy h2 {
        color: #2c3e50;
        font-weight: bold;
    }

    /* Estilo para los párrafos */
    .privacy-policy p {
        color: #555555;
        margin-bottom: 15px;
    }

    /* Estilo para las listas */
    .privacy-policy ul {
        list-style-type: disc;
        margin-left: 20px;
        color: #555555;
    }

    .privacy-policy ul li {
        margin-bottom: 10px;
    }

    /* Enlaces */
    .privacy-policy a {
        color: #007bff;
        text-decoration: none;
    }

    .privacy-policy a:hover {
        text-decoration: underline;
    }
</style>

<div class="container">
    <div class="privacy-policy">
        <h1 class="text-center mb-4">Política de Privacidad</h1>
        <p>En <strong>Turista sin maps</strong>, nos tomamos muy en serio la privacidad de nuestros usuarios. Esta política describe cómo recopilamos, usamos y protegemos su información personal.</p>
        
        <h2>1. Información que recopilamos</h2>
        <p>Podemos recopilar información personal cuando usted utiliza nuestra plataforma, incluyendo pero no limitándose a:</p>
        <ul>
            <li>Nombre completo</li>
            <li>Dirección de correo electrónico</li>
            <li>Número de teléfono</li>
            <li>Datos de ubicación (si lo permite)</li>
            <li>Preferencias de búsqueda y reservas realizadas a través de nuestra plataforma</li>
        </ul>

        <h2>2. Uso de su información</h2>
        <p>La información recopilada se utilizará para los siguientes propósitos:</p>
        <ul>
            <li>Facilitar el uso de nuestra plataforma y servicios.</li>
            <li>Personalizar su experiencia de usuario.</li>
            <li>Procesar reservas, pagos y solicitudes de servicio.</li>
            <li>Enviar notificaciones importantes, promociones, y actualizaciones relacionadas con nuestros servicios.</li>
            <li>Cumplir con requisitos legales o regulatorios.</li>
        </ul>

        <h2>3. Compartir su información</h2>
        <p>No vendemos, alquilamos ni compartimos su información personal con terceros, salvo en los siguientes casos:</p>
        <ul>
            <li>Cuando sea necesario para procesar reservas o servicios a través de terceros.</li>
            <li>Con proveedores de servicios que trabajan en nuestro nombre (por ejemplo, servicios de pago o marketing).</li>
            <li>Cuando sea requerido por ley o para proteger nuestros derechos legales.</li>
        </ul>

        <h2>4. Uso de cookies</h2>
        <p>Utilizamos cookies para mejorar su experiencia en nuestro sitio web. Las cookies nos permiten:</p>
        <ul>
            <li>Recordar sus preferencias y configuraciones.</li>
            <li>Realizar análisis del uso de nuestro sitio web.</li>
            <li>Ofrecer publicidad personalizada.</li>
        </ul>
        <p>Puede desactivar las cookies en la configuración de su navegador, pero esto podría afectar la funcionalidad del sitio.</p>

        <h2>5. Seguridad de la información</h2>
        <p>Implementamos medidas técnicas y organizativas adecuadas para proteger su información personal contra el acceso no autorizado, pérdida, uso indebido o destrucción.</p>

        <h2>6. Derechos del usuario</h2>
        <p>Como usuario, usted tiene los siguientes derechos sobre sus datos personales:</p>
        <ul>
            <li>Acceder a la información que tenemos sobre usted.</li>
            <li>Solicitar la corrección de datos inexactos.</li>
            <li>Solicitar la eliminación de su información personal.</li>
            <li>Retirar su consentimiento para el uso de sus datos personales en cualquier momento.</li>
        </ul>
        <p>Para ejercer estos derechos, contáctenos a través de los medios proporcionados a continuación.</p>

        <h2>7. Cambios en esta política</h2>
        <p>Nos reservamos el derecho de actualizar esta política de privacidad en cualquier momento. Las actualizaciones estarán disponibles en esta misma sección de nuestro sitio web. Recomendamos revisar esta política periódicamente para estar al tanto de cualquier cambio.</p>

        <h2>8. Contacto</h2>
        <p>Si tiene preguntas o inquietudes sobre esta política de privacidad o sobre cómo manejamos sus datos personales, puede ponerse en contacto con nosotros a través de los siguientes medios:</p>
        <ul>
            <li>Email: soporte@turistasinmaps.com</li>
            <li>Teléfono: +52 123 456 7890</li>
            <li>Dirección: Calle Ejemplo 123, Ciudad, País</li>
        </ul>
    </div>
</div>

@endsection