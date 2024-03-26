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
      <img src="profile_picture.jpeg" alt="Your Photo" class="profile-image">
    </div>
    <div class="col-md-8">
      <h1 class="text-white">Hello!</h1>
      <p class="lead text-white">I'm Victor Antoniazi, a Full Stack developer, with over 6 years of experience.</p>
      <div class="social-icons">
        <a href="https://github.com/VAntoniazi" target="_blank" class="mr-3"><img src="github.png" alt="Github" class="social-icon"></a>
        <a href="https://www.linkedin.com/in/victor-antoniazi/" target="_blank"><img src="linkedin.png" alt="LinkedIn" class="social-icon"></a>
      </div>
    </div>
  </div>

  <div class="row profile-info mt-5">
    <div class="col-md-12">
      <h2 class="section-title">Experience</h2>
      <p>I started programming in 2018, in PHP, SQL, and Javascript, over the years, as needed, more languages have been used, such as Bootstrap, Node.js, Python, R, as well as APIs of payment gateways.</p>
    </div>
  </div>

  <div class="row profile-info">
    <div class="col-md-12">
      <h2 class="section-title">Languages</h2>
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
      <h2 class="section-title">Projects</h2>
      <div class="project">
        <h3>Ecommerce</h3>
        <p>A complete ecommerce project for selling drinks, offering a wide variety of products and features for an excellent shopping experience. It includes advanced data processing features for efficient inventory management and sales analysis. Additionally, it seamlessly integrates with ZIP code APIs and payment platforms, ensuring a fast and secure checkout experience for customers.</p>
      </div>
      <div class="project">
        <h3>ERP System</h3>
        <p>A comprehensive ERP system developed to optimize business processes. This system integrates and centralizes all business operations, from inventory management to finances, allowing a holistic view and effective control of company resources.</p>
      </div>
      <div class="project">
        <h3>Custom Intranet</h3>
        <p>A customized intranet designed to facilitate internal communication and collaboration within the corporation. This intranet offers features such as instant messaging, document sharing, and shared calendars to promote collaboration among employees.</p>
      </div>
      <div class="project">
        <h3>Chat System</h3>
        <p>A chat system developed to facilitate instant communication among users. This system offers advanced features such as themed chat rooms, file sharing, and conversation history to enhance collaboration and productivity.</p>
      </div>
      <div class="project">
        <h3>Human Resources Management System</h3>
        <p>A complete human resources management system developed to meet the specific needs of the largest ecommerce company in southern Brazil. This system covers everything from recruitment and selection of employees to training, performance evaluation, and benefits management.</p>
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
