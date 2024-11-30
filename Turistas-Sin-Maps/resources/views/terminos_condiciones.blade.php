@extends('layouts.plantilla')

@section('titulo', 'inicio')

@section('contenidoTerminos')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Términos y Condiciones</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .terms-container {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 40px auto;
            max-width: 800px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container">
        <div class="terms-container">
            <h1 class="text-center mb-4">Términos y Condiciones</h1>
            <p>Turista sin maps es un buscador de hoteles y ofrece a sus usuarios una plataforma de intercambio de información y experiencias de hospedaje, destinos turísticos, atractivos turísticos y otros servicios relacionados con los viajes.</p>
            
            <h2>1. Alcance del servicio</h2>
            <p>1.1. Estos términos y condiciones están sujetos a cambios ocasionales y aplican a todos nuestros servicios proporcionados directa o indirectamente (p.ej., a través de terceros) a través de Internet, dispositivos móviles, correo electrónico o teléfono.</p>
            <p>1.2. Al hacer uso de nuestro sitio web, usted confirma que ha leído, entendido y aceptado estos términos y condiciones, al igual que la política de privacidad, incluyendo el uso de cookies.</p>
            
            <h2>2. Servicios y contratos</h2>
            <p>2.1. En el sitio web de Turista sin maps usted tiene la capacidad de comparar los servicios de terceros a través del sistema de Trivago.</p>
            <p>2.2. Turista sin maps no es el proveedor de los servicios comparados. El servicio de Turista sin maps únicamente incluye la posibilidad de comparar varios servicios ofrecidos por terceros...</p>
        
            <h2>3. Comunidad y zona para miembros</h2>
            <p>3.1. Los usuarios podrán unirse a la Comunidad de Turista sin maps (en lo sucesivo, «la Comunidad») y crear una cuenta en la zona para miembros de Turista sin maps. Los usuarios que se registren en la Comunidad podrán publicar contenido generado por ellos mismos, así como participar activamente en el desarrollo de la plataforma mediante las funciones administrativas. Los usuarios no registrados podrán leer gratis el contenido disponible en Turista sin maps.</p>
            <p>3.2. Al usar la zona para miembros de Turista sin maps, los usuarios podrán gestionar y guardar sus búsquedas. Para crear una cuenta, será necesario aportar datos personales. Aparte del nombre de usuario, ningún otro dato personal será visible. Para obtener más información al respecto, recomendamos consultar la política de privacidad de Turista sin maps. Borrar la cuenta supondrá la eliminación de todos los datos del usuario de forma permanente.</p>
            <p>3.3. Un mismo usuario no se podrá registrar más de una vez. Además, corresponderá a este asegurarse de que sus datos personales sean correctos y completos.</p>

            <h2>4. Obligaciones de los usuarios</h2>
            <p>El usuario es responsable de la adquisición de los derechos para el contenido (texto, fotos, opiniones, enlaces, etc.) que suben a Turista sin maps. Ellos deben asegurarse de que poseen todos los derechos del contenido que publican en la plataforma de Turista sin maps y, por lo tanto, no violan los derechos de terceros.</p>
            <p>El usuario se compromete a no utilizar los servicios de Turista sin maps para crear contenido que:</p>
        <ul>
            <li>sea publicidad disfrazada de opiniones,</li>
            <li>no tenga contenido específico a un hotel,</li>
            <li>no sea objetivo o sea intencionalmente falso,</li>
            <li>sea inmoral, pornográfico o de cualquier otra manera ofensivo,</li>
            <li>infrinja los derechos de terceros, en particular los derechos de autor,</li>
            <li>viole las leyes aplicables en cualquier forma o constituya un delito,</li>
            <li>contenga virus u otros programas de computadora que puedan dañar el software o hardware o que puedan afectar el uso de computadoras,</li>
            <li>sea una encuesta o cadena,</li>
            <li>tenga por objetivo recolectar o utilizar los datos personales de otros usuarios, especialmente para fines comerciales.</li>
        </ul>

       
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


@endsection