<?php
$codigo = isset($_GET['code'])
    ? (int) $_GET['code']
    : (isset($_SERVER['REDIRECT_STATUS']) ? (int) $_SERVER['REDIRECT_STATUS'] : 404);

$errores = array(
    400 => array('Petición incorrecta', 'La dirección solicitada no tiene un formato válido.'),
    401 => array('Sesión requerida', 'Esta sección necesita una sesión válida. Inicia sesión e inténtalo de nuevo.'),
    403 => array('Acceso no autorizado', 'No tienes permiso para ver este contenido.'),
    404 => array('Página no encontrada', 'La dirección que buscas no existe o ha cambiado de lugar.'),
    405 => array('Método no permitido', 'La forma de enviar la petición no es válida para esta dirección.'),
    500 => array('Error del servidor', 'Se produjo un error inesperado. Inténtalo de nuevo en unos minutos.'),
    502 => array('Puerta de enlace incorrecta', 'El servidor no logró obtener respuesta del sitio de destino.'),
    503 => array('Servicio no disponible', 'El sitio está temporalmente fuera de servicio.'),
    504 => array('Tiempo de espera agotado', 'El servidor tardó demasiado en responder.'),
);

if (!isset($errores[$codigo])) {
    $codigo = 404;
}

list($titulo, $detalle) = $errores[$codigo];

$base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');

if ($base === '' || $base === '/') {
    $base = '';
    $ruta = trim($_SERVER['REQUEST_URI'], '/');
    $primerSegmento = strtok($ruta, '/');
    if ($primerSegmento !== false && preg_match('/^[A-Za-z0-9_-]+$/', $primerSegmento)) {
        $base = '/' . $primerSegmento;
    }
}

$volver = ($base === '' ? '' : $base) . '/';

http_response_code($codigo);
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<title><?php echo $codigo; ?> &middot; <?php echo htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8'); ?></title>
<style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    html { height: 100%; }

    body {
        min-height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 24px;
        font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        background: #0f172a;
        color: #e2e8f0;
        position: relative;
        overflow: hidden;
    }

    .codigo {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -54%);
        font-size: 30vw;
        font-weight: 800;
        line-height: 1;
        color: rgba(148, 163, 184, 0.08);
        pointer-events: none;
        user-select: none;
        white-space: nowrap;
    }

    .tarjeta {
        position: relative;
        width: 100%;
        max-width: 520px;
        padding: 44px 40px;
        text-align: center;
        background: rgba(30, 41, 59, 0.72);
        border: 1px solid rgba(148, 163, 184, 0.18);
        border-radius: 16px;
        backdrop-filter: blur(8px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
    }

    .numero {
        display: inline-block;
        font-size: 15px;
        font-weight: 700;
        letter-spacing: 2px;
        padding: 7px 16px;
        border-radius: 999px;
        background: rgba(56, 189, 248, 0.14);
        color: #7dd3fc;
        border: 1px solid rgba(56, 189, 248, 0.3);
    }

    h1 {
        margin: 20px 0 12px;
        font-size: 26px;
        font-weight: 700;
        line-height: 1.3;
        color: #f8fafc;
    }

    p {
        margin-bottom: 28px;
        font-size: 15px;
        line-height: 1.6;
        color: #94a3b8;
    }

    .boton {
        display: inline-block;
        padding: 12px 30px;
        font-size: 15px;
        font-weight: 600;
        text-decoration: none;
        color: #0f172a;
        background: #38bdf8;
        border-radius: 8px;
        transition: background 0.18s ease, transform 0.18s ease;
    }

    .boton:hover { background: #7dd3fc; transform: translateY(-1px); }
    .boton:focus-visible { outline: 3px solid #7dd3fc; outline-offset: 3px; }

    .pie {
        margin-top: 26px;
        font-size: 12px;
        color: #64748b;
    }

    @media (max-width: 480px) {
        .tarjeta { padding: 34px 24px; }
        h1 { font-size: 22px; }
    }
</style>
</head>
<body>

<div class="codigo" aria-hidden="true"><?php echo $codigo; ?></div>

<main class="tarjeta">
    <span class="numero">ERROR <?php echo $codigo; ?></span>
    <h1><?php echo htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8'); ?></h1>
    <p><?php echo htmlspecialchars($detalle, ENT_QUOTES, 'UTF-8'); ?></p>
    <a class="boton" href="<?php echo htmlspecialchars($volver, ENT_QUOTES, 'UTF-8'); ?>">Volver al inicio</a>
    <p class="pie">Si crees que esto es un error, avisa al administrador del sitio.</p>
</main>

</body>
</html>