<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VAntoniazi</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <div class="language-buttons">
        <button onclick="reloadPage('en')">🇺🇸</button>
        <button onclick="reloadPage('pt')">🇧🇷</button>
        <button onclick="reloadPage('es')">🇪🇸</button>
    </div>
</header>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-4 text-center">
      <img src="profile_picture.jpeg" alt="Tu Foto" class="profile-image">
    </div>
    <div class="col-md-8">
      <h1 class="text-white">¡Hola!</h1>
      <p class="lead text-white">Soy Victor Antoniazi, desarrollador Full Stack, con más de 6 años de experiencia.</p>
      <div class="social-icons">
        <a href="https://github.com/VAntoniazi" target="_blank" class="mr-3"><img src="github.png" alt="Github" class="social-icon"></a>
        <a href="https://www.linkedin.com/in/victor-antoniazi/" target="_blank"><img src="linkedin.png" alt="LinkedIn" class="social-icon"></a>
      </div>
    </div>
  </div>

  <div class="row profile-info mt-5">
    <div class="col-md-12">
      <h2 class="section-title">Experiencia</h2>
      <p>Comencé a programar en 2018, en PHP, SQL y Javascript, con el paso de los años, según las necesidades, se han utilizado más lenguajes, como Bootstrap, Node.js, Python, R, así como APIs de gateways de pago.</p>
    </div>
  </div>

  <div class="row profile-info">
    <div class="col-md-12">
      <h2 class="section-title">Lenguajes</h2>
      <div class="languages-row">
        <ul class="list-unstyled">
          <li><img src="php.png" alt="PHP" class="language-icon"> PHP</li>
          <li><img src="css.png" alt="CSS" class="language-icon"> CSS</li>
          <li><img src="sql.png" alt="SQL" class="language-icon"> SQL</li>
          <li><img src="javascript.png" alt="JavaScript" class="language-icon"> JavaScript</li>
          <li><img src="bootstrap.png" alt="Bootstrap" class="language-icon"> Bootstrap</li>
        </ul>
      </div>
      <div class="languages-row">
        <ul class="list-unstyled">
          <li><img src="nodejs.png" alt="Node.js" class="language-icon"> Node.js</li>
          <li><img src="python.png" alt="Python" class="language-icon"> Python</li>
          <li><img src="r.png" alt="R" class="language-icon"> R</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row profile-info">
    <div class="col-md-12">
      <h2 class="section-title">Proyectos</h2>
      <div class="project">
        <h3>Comercio Electrónico</h3>
        <p>Un proyecto de comercio electrónico completo para la venta de bebidas, que ofrece una amplia variedad de productos y funcionalidades para una excelente experiencia de compra. Incluye recursos avanzados de procesamiento de datos para la gestión eficiente del inventario y el análisis de ventas. Además, se integra perfectamente con APIs de CEP y plataformas de pago, garantizando una experiencia de pago rápida y segura para los clientes.</p>
      </div>
      <div class="project">
        <h3>Sistema ERP</h3>
        <p>Un sistema ERP integral desarrollado para optimizar los procesos de negocios. Este sistema integra y centraliza todas las operaciones empresariales, desde la gestión de inventario hasta las finanzas, permitiendo una visión holística y un control efectivo de los recursos de la empresa.</p>
      </div>
      <div class="project">
        <h3>Intranet Personalizada</h3>
        <p>Una intranet personalizada diseñada para facilitar la comunicación y colaboración interna dentro de la corporación. Esta intranet ofrece recursos como mensajes instantáneos, intercambio de archivos y calendarios compartidos para promover la colaboración entre los empleados.</p>
      </div>
      <div class="project">
        <h3>Sistema de Chat</h3>
        <p>Un sistema de chat desarrollado para facilitar la comunicación instantánea entre los usuarios. Este sistema ofrece funciones avanzadas, como salas de chat temáticas, intercambio de archivos e historial de conversaciones, para mejorar la colaboración y la productividad.</p>
      </div>
      <div class="project">
        <h3>Sistema de Gestión de Recursos Humanos</h3>
        <p>Un sistema completo de gestión de recursos humanos desarrollado para satisfacer las necesidades específicas del mayor comercio electrónico del sur de Brasil. Este sistema abarca desde la contratación y selección de empleados hasta la capacitación, evaluación del desempeño y gestión de beneficios.</p>
      </div>
    </div>
  </div>
</div>

<script>
  function reloadPage(language) {
    switch(language) {
      case 'en':
        window.location.href = "index.php";
        break;
      case 'pt':
        window.location.href = "index_pt.php";
        break;
      case 'es':
        window.location.href = "index_es.php";
        break;
      default:
        break;
    }
  }
</script>
</body>
</html>
