<!DOCTYPE html>
<html lang="Fr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!--Référencement (toutes pages)-->
  <meta name="description" content="Tartempion. Travaux et projets architecturaux"> 
  <meta name="keywords" content="travaux, outils, architecture, architecte, batiment"> 
  <meta name="robots" content="index, follow">
  <title>Tartempion</title>
  <!--Liens et scripts (css/ajax/jquery/bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<!-- Gestion de la langue dans la session -->
<?php
// Langue choisie
if(isset($_GET['lang']))
  $this->session->set_userdata('langue', $_GET['lang']);
// Langue par default 
else if (empty($this->session->userdata('langue')))
  $this->session->set_userdata('langue', 'Fr');
?>

  <img src="<?= base_url('assets/Img/TarLogo.jpg'); ?>" title="Tartempion" id='ImgTartempion' alt="Logo" style="margin-bottom: 2px;">

  <!-- Drapeaux de choix du language -->      
  <section id=flags>                          
      <a href="?lang=fr"><img src="<?= base_url('assets/Img/fr.png'); ?>" title="Fr"></a>
      <a href="?lang=en"><img src="<?= base_url('assets/Img/en.png'); ?>" title="En"></a>
      <a href="?lang=es"><img src="<?= base_url('assets/Img/es.png'); ?>" title="Es"></a>
  </section>   

  <header>
  <!-- Affichage de la barre de navigation -->
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
        <li><a href="<?php echo site_url('welcome/home')?>">
      <?php 
  // Langue: Anglais
    if ($this->session->userdata('langue') == 'en')
    {
     echo 'Home';
    }
  // Langue: Espagnol
    else if ($this->session->userdata('langue') == 'es')
    {
    echo 'Bienvenida';
    }
// Langue: Français
   else
    {
     echo 'Accueil';
    }
      ?>
      <li><a href="<?php echo site_url('welcome/table')?>">
      <?php 
  // Langue: Anglais
    if ($this->session->userdata('langue') == 'en')
    {
     echo 'Board';
    }
  // Langue: Espagnol
    else if ($this->session->userdata('langue') == 'es')
    {
    echo 'Mesa';
    }
  // Langue: Français
   else
    {
     echo 'Tableau</a></li>';
    }
      ?>
      <li><a href="<?php echo site_url('welcome/contact')?>">
      <?php 
  // Langue: Anglais
    if ($this->session->userdata('langue') == 'en')
    {
     echo 'Contact';
    }
  // Langue: Espagnol
    else if ($this->session->userdata('langue') == 'es')
    {
    echo 'Contactar';
    }
  // Langue: Français
   else
    {
     echo 'Contact';
    }
      ?>
      </a></li>

      <li><a href="https://dev.amorce.org/valentin/index.php">
      <?php 
  // Langue: Anglais
    if ($this->session->userdata('langue') == 'en')
    {
     echo 'Menu';
    }
  // Langue: Espagnol
    else if ($this->session->userdata('langue') == 'es')
    {
    echo 'Menú';
    }
  // Langue: Français
   else
    {
     echo 'Menu';
    }
      ?>
      </a>
      </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">     

      <?php 
      echo '<li><a href="'.site_url('http://localhost/prestashop/').'"><span class="glyphicon glyphicon-shopping-cart">  </span>';
      // Langue: Anglais
       if ($this->session->userdata('langue') == 'en')
      {
       echo '&nbsp Basket';
      }
      // Langue: Espagnol
      else if ($this->session->userdata('langue') == 'es')
      {
      echo '&nbsp Cesta';
      }
      // Langue: Français
      else
      {
        echo '&nbsp Panier';
      }

      //Si pas connecté,  on affiche les liens pour s'enregistrer et se logguer
      if (!$this->session->userdata('connected')) {
        
              echo '<li><a href="'.site_url('welcome/register').'"><span class="glyphicon glyphicon-user"></span> ';
  // Langue: Anglais
    if ($this->session->userdata('langue') == 'en')
    {
     echo 'Register';
    }
  // Langue: Espagnol
    else if ($this->session->userdata('langue') == 'es')
    {
    echo 'Registro';
    }
  // Langue: Français
   else
    {
     echo 'S\'enregistrer';
    }


              echo '<li><a href="'.site_url('welcome/login').'"><span class="glyphicon glyphicon-log-in">  </span>';
  // Langue: Anglais
   if ($this->session->userdata('langue') == 'en')
   {
    echo '&nbsp Log in';
   }
  // Langue: Espagnol
   else if ($this->session->userdata('langue') == 'es')
   {
   echo '&nbsp Conectarse';
   }
  // Langue: Français
  else
   {
    echo ' Se connecter';
   }
  }    
        //Si connecté, on affiche le nom, et le lien pour se délogguer
        else
        {
          echo '<li><a><span class="glyphicon glyphicon-user"></span>&nbsp '.$this->session->userdata('email').'</a></li>';
          echo '<li><a href="'.site_url('welcome/logout').'"><span class="glyphicon glyphicon-log-in"></span>';
                // Langue: Anglais
                 if ($this->session->userdata('langue') == 'en')
                 {
                  echo '&nbsp Sign out';
                 }
                // Langue: Espagnol
                 else if ($this->session->userdata('langue') == 'es')
                 {
                 echo '&nbsp Desconectarse';
                 }
                // Langue: Français
                else
                 {
                  echo '&nbsp Se déconnecter';
                 }
                }           
        ?>
            </a></li>
      </ul>
    </div>
  </div>
</nav>
    </div>
  </nav>
  
  <p><img src="<?= base_url('assets/Img/Font.jpg'); ?>" title="Bannière" id='ImgMaison' alt="Tartempion"></p>
</header>
<body>