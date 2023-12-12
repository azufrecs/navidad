<?php
$DiaActual = date('d', time());
$MensajeNavidad = array(
  "",
  "A partir de hoy y durante este mes recibirás mensajes especiales, dedicados a ti, para que este año culmine lleno de alegría y recibas el próximo lleno de amor y felicidad.",
  "La Navidad es el espíritu de dar sin tener pensamientos de recibir. Es felicidad porque vemos alegría en las personas. Es olvidarse de sí mismo y encontrar tiempo para otros.",
  "La Navidad es la estación para encender el fuego de la hospitalidad en el pasillo y la genial llama de la caridad en el corazón.",
  "La navidad no es solo un tiempo para la festividad. Es más que eso. Es un tiempo para la contemplación de las cosas eternas. El espíritu navideño es un espíritu de dar y perdonar.",
  "La Navidad no es un desfile o un concierto, sino un pedazo de hogar que guardas en tu corazón dondequiera que vayas.",
  "No existe la Navidad ideal, solo la Navidad que usted decida crear como reflejo de sus valores, deseos y tradiciones.",
  "Aunque se pierdan otras cosas a lo largo de los años, mantengamos la Navidad como algo brillante. Regresemos a nuestra infancia.",
  "El espíritu de Navidad es el espíritu del amor, de la generosidad y de la bondad; nos ilumina la ventana panorámica del alma y nos interesamos más en las personas que en las cosas.",
  "La Navidad es para siempre, no para un solo día. Porque amar, compartir y dar, no se deben guardar como las campanas, las luces y el oropel, en alguna caja sobre un estante.",
  "Que esta Navidad transforme cada lágrima en una flor, cada dolencia en una estrella, cada deseo en una sonrisa y cada corazón en una cálida morada.",
  "Los regalos como el tiempo y el amor son sin duda los ingredientes básicos de una verdadera Navidad feliz.",
  "Cuando la Navidad nos llama, nadie queda al margen, desde el más pequeño al mayor se funden en un gran abrazo.",
  "Puedes vivir tranquilo y feliz, porque hay mucha gente que te quiere, te estima y te lleva en el corazón.",
  "La Navidad no es una fecha ni una temporada, sino un estado de ánimo. Desear paz y buena voluntad y abundar en misericordia es reflejar el verdadero espíritu navideño.",
  "Si estas fiestas ves a un señor vestido de rojo bajando por tu chimenea y te mete en un saco, no te asustes, es que le pedido a papá Noel que mi regalo seas tú.",
  "Una taza de ilusión, cuatro cucharadas de ternura, una pizca de amistad y mucho, mucho amor sincero: la receta para una Navidad perfecta.",
  "Si la vida te da mil razones para llorar, demuéstrale que tienes mil y una para soñar.",
  "Dicen que las mejores cosas de la vida nunca vienen solas y en estas Navidades lo confirmé... ¡Vienen contigo!",
  "Un año nuevo siempre trae nuevos sueños, nuevos objetivos, nuevos retos, pero los viejos amigos siempre siguen ahí.",
  "Lo mejor de todos los regalos alrededor de cualquier árbol de Navidad es la presencia de una familia feliz.",
  "Los amigos se parecen a las estrellas, no siempre las ves, pero sabes que siempre están allí para ti.",
  "Hablé con la FELICIDAD y me dijo que iba para tu casa, le pedí que no deje de llevarte SALUD y AMOR. Trátala bien, va de mi parte.",
  "Que tus segundos se llenen de magia, tus minutos de risa, tus horas de amor y en tu corazón crezcan la alegría, la paz y la esperanza. ¡Feliz Navidad!",
  "No dejes de contagiarte de la alegría y felicidad propias de esta celebración tan hermosa y celestial como es la Navidad. Que la Noche Buena traiga mucha armonía y paz a tu vida.",
  "Que esta Navidad cada deseo tuyo se haga posible, cada sueño se vuelva realidad y te inundes en dicha y felicidad.",
  "La Navidad es como un dulce; lentamente se derrite en tu boca, endulzando cada paladar, haciendo que desees que pueda durar para siempre.",
  "Hagamos un hermoso brindis levantando las copas hoy y también con los corazones en honor de la felicidad que la Navidad provee todos los años.",
  "Hay solo dos días en el año en los que no podemos hacer nada: AYER Y MAÑANA, pero HOY puedes perdonar, sonreír, soñar, amar y ser feliz.",
  "Cuando recordamos las Navidades pasadas, nos daremos cuenta de que las cosas más simples son las que dan mayor felicidad.",
  "Que en estas fiestas la magia sea tu mejor traje, tu sonrisa el mejor regalo, tus ojos el mejor destino y tu felicidad mi mejor deseo.",
  "La Navidad es un tónico para nuestras almas. Nos mueve a pensar en los demás más que en nosotros mismos. Dirige nuestros pensamientos a dar.",
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Mensajes - Navidad</title>
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Vendor CSS Files -->
  <link href="assets/css/fonts.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="container">
      <div class="content">
        <div class="row justify-content-between">
          <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center text-white">
            <div data-aos="zoom-out">
              <h1><?php echo $MensajeNavidad[$DiaActual]; ?></h1>
              <div class="text-center text-lg-start">
                <br>
                <a class="btn btn-success" href="javascript:cerrar();">Cerrar mensaje</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 order-1 order-lg-2 hero-img text-white" data-aos="zoom-out" data-aos-delay="300">
            <img src="assets/img/pic-<?php echo $DiaActual; ?>.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->


  <!-- BEGIN FOOTER -->
  <footer>
    <div align="center">
      <div align="center" class="display-6 text-white">
        <p class="h3">Muchas felicidades le desea <i>UAASS Camag&uuml;ey</p>
        <div>
        </div>
  </footer>
  <!-- FINISH FOOTER -->


  <!-- Vendor JS Files -->

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery-3.6.0.js"></script>


  <script language="javascript" type="text/javascript">
    function cerrar() {
      window.open('', '_parent', '');
      window.close();
    }

    /* SONAR CANCION DE NAVIDAD */
    $(document).ready(function() {
      var sonido = new Audio('assets/sound/navidad.mp3');
      sonido.loop = true;
      sonido.play();
      sonido.volume = 0.1;
    });
  </script>
</body>

</html>