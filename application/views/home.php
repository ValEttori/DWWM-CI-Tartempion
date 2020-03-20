  <?php
  // En cas de connection, on affiche un message de confirmation
   if (isset($session)) 
    echo '<p class="alert alert-success">'.$session.'</p>';
  ?>
  <section id='accueil'>

  <?php 
   // Langue: Anglais
   if ($this->session->userdata('langue') == 'en')
   {
    echo '<h1><dt>Home</dt></h1>
    <h2><dt>The company</dt></h2>
    <article>
      <p>Our family business puts all its know-how at your disposal in the field of gardening and landscaping.</p>
      <p>Created 70 years ago, our company sells flowers, shrubs, hand and motorized equipment.</p>
      <p>Located in Amiens, we operate throughout the Somme department: Albert, Doullens, Péronne, Abbeville, Corbie.</p>
      <h2><dt>Quality</dt></h2>
      <p>We offer you a personalized service, with a single contact throughout your project.</p>
      <p>You will be seduced by our expertise, our skills and our seriousness.</p>
      <h2><dt>Free quote</dt></h2>
      <p>You can of course contact us for more information or for an intervention request. Would you like an estimate ? We realize it for free. 
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp To your wishes.</p>
    </article>';
    }
  // Langue: Espagnol
  else if ($this->session->userdata('langue') == 'es')
   {
     echo '<h1><dt>Bienvenida</dt></h1>
     <h2><dt>La compañía</dt></h2>
     <article>
       <p>Nuestro negocio familiar pone todo su know-how a su disposición en el campo de la jardinería y el paisajismo.</p>
       <p>Creada hace 70 años, nuestra empresa vende flores, arbustos, equipos manuales y motorizados.</p>
       <p>Ubicados en Amiens, operamos en todo el departamento del Somme: Albert, Doullens, Péronne, Abbeville, Corbie.</p>
       <h2><dt>Calidad</dt></h2>
       <p>Le ofrecemos un servicio personalizado, con un solo contacto a lo largo de su proyecto.</p>
       <p>Serás seducido por nuestra experiencia, nuestras habilidades y nuestra seriedad.</p>
       <h2><dt>Cotización gratis</dt></h2>
       <p>Por supuesto, puede contactarnos para obtener más información o para una solicitud de intervención. Quieres una cotizacion? Lo realizamos de forma gratuita.</p>
     </article>';
    }
   // Langue: Français
   else
   {
     echo '<h1><dt>Accueil</dt></h1>
     <h2><dt>L\'entreprise</dt></h2>
     <article>
       <p>Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.</p>
       <p>Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
       <p>Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie.</p>
       <h2><dt>Qualité</dt></h2>
       <p>Nous mettons à votre disposition un service personnalisé, avec un seul interlocuteur durant tout votre projet.</p>
       <p>Vous serez séduit par notre expertise, nos compétences et notre sérieux.</p>
       <h2><dt>Devis gratuit</dt></h2>
       <p>Vous pouvez bien sûr nous contacter pour de plus amples informations ou pour une demande d’intervention. Vous souhaitez un devis ? Nous vous le réalisons gratuitement.</p>
     </article>';
    }
    ?>
  </section>