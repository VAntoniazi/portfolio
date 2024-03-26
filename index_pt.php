<!DOCTYPE html>
<html lang="en">
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
      <img src="profile_picture.jpeg" alt="Sua Foto" class="profile-image">
    </div>
    <div class="col-md-8">
      <h1 class="text-white">Olá!</h1>
      <p class="lead text-white">Sou Victor Antoniazi, desenvolvedor Full Stack, com mais de 6 anos de experiência.</p>
      <div class="social-icons">
        <a href="https://github.com/VAntoniazi" target="_blank" class="mr-3"><img src="github.png" alt="Github" class="social-icon"></a>
        <a href="https://www.linkedin.com/in/victor-antoniazi/" target="_blank"><img src="linkedin.png" alt="LinkedIn" class="social-icon"></a>
      </div>
    </div>
  </div>

  <div class="row profile-info mt-5">
    <div class="col-md-12">
      <h2 class="section-title">Experiência</h2>
      <p>Comecei a programar em 2018, em PHP, SQL e Javascript, com o passar dos anos, de acordo com as necessidades, mais linguagens vem sendo utilizadas, como Bootstrap, Node.js, Python, R, assim como APIs de gateways de pagamento.</p>
    </div>
  </div>

  <div class="row profile-info">
    <div class="col-md-12">
      <h2 class="section-title">Linguagens</h2>
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
      <h2 class="section-title">Projetos</h2>
      <div class="project">
        <h3>Ecommerce</h3>
        <p>Um projeto de ecommerce completo para venda de bebidas, oferecendo uma ampla variedade de produtos e funcionalidades para uma experiência de compra excelente. Inclui recursos avançados de processamento de dados para gerenciamento eficiente do inventário e análise de vendas. Além disso, integra-se perfeitamente com APIs de CEP e plataformas de pagamento, garantindo uma experiência de checkout rápida e segura para os clientes.</p>
      </div>
      <div class="project">
        <h3>Sistema ERP</h3>
        <p>Um sistema ERP abrangente desenvolvido para otimizar os processos de negócios. Esse sistema integra e centraliza todas as operações empresariais, desde o gerenciamento de estoque até as finanças, permitindo uma visão holística e um controle eficaz dos recursos da empresa.</p>
      </div>
      <div class="project">
        <h3>Intranet Personalizada</h3>
        <p>Uma intranet personalizada projetada para facilitar a comunicação e a colaboração interna dentro da corporação. Essa intranet oferece recursos como mensagens instantâneas, compartilhamento de documentos e calendários compartilhados para promover a colaboração entre os funcionários.</p>
      </div>
      <div class="project">
        <h3>Sistema de Chat</h3>
        <p>Um sistema de chat desenvolvido para facilitar a comunicação instantânea entre os usuários. Esse sistema oferece recursos avançados, como salas de chat temáticas, compartilhamento de arquivos e histórico de conversas, para melhorar a colaboração e a produtividade.</p>
      </div>
      <div class="project">
        <h3>Sistema de Gestão de Recursos Humanos</h3>
        <p>Um sistema completo de gestão de recursos humanos desenvolvido para atender às necessidades específicas do maior ecommerce do sul do Brasil. Esse sistema abrange desde o recrutamento e seleção de funcionários até o treinamento, avaliação de desempenho e gerenciamento de benefícios.</p>
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
