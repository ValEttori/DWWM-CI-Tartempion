<!-- Barre de navigation de bas de page -->
<footer>
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
    <li><a href="https://www.google.fr/" title="legale">
      <?php 
  // Langue: Anglais
    if ($this->session->userdata('langue') == 'en')
    {
     echo 'Legal Notice';
    }
  // Langue: Espagnol
    else if ($this->session->userdata('langue') == 'es')
    {
     echo 'Notas legales';
    }
  // Langue: Français
    else
    {
     echo 'Mentions légales';
    }
      ?>
      </a></li>
      
      <li><a href="https://www.google.fr/" title="horaire">
      <?php 
  // Langue: Anglais
    if ($this->session->userdata('langue') == 'en')
    {
     echo 'Schedule';
    }
  // Langue: Espagnol
    else if ($this->session->userdata('langue') == 'es')
    {
     echo 'Horario';
    }
  // Langue: Français
    else
    {
     echo 'Horaires';
    }
      ?>
      </a></li>

      <li><a href="https://www.google.fr/" title="plan">
      <?php 
  // Langue: Anglais
    if ($this->session->userdata('langue') == 'en')
    {
     echo 'Sitemap';
    }
  // Langue: Espagnol
    else if ($this->session->userdata('langue') == 'es')
    {
     echo 'Plano del sitio';
    }
  // Langue: Français
    else
    {
     echo 'Plan du site';
    }
      ?>
      </a>
      </ul>
      <ul class="nav navbar-nav navbar-right">  
      <li><a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a></li>
      <li><a href="https://www.youtube.com/" class="fa fa-youtube" target="_blank"></a></li>
      <li><a href="https://www.twitter.com/" class="fa fa-twitter" target="_blank"></a></li>
      <li><a href="https://www.pinterest.com/" class="fa fa-pinterest" target="_blank"></a></li>
      <li><a href="https://www.snapchat.com/" class="fa fa-snapchat-ghost" target="_blank"></a></li>
      </ul>
      </div>

<!-- RGPD: Règlement Général sur la Protection des Données -->
<!-- Quantcast Choice. Consent Manager Tag -->
<script type="text/javascript" async=true>
    var elem = document.createElement('script');
    elem.src = 'https://quantcast.mgr.consensu.org/cmp.js';
    elem.async = true;
    elem.type = "text/javascript";
    var scpt = document.getElementsByTagName('script')[0];
    scpt.parentNode.insertBefore(elem, scpt);
    (function() {
    var gdprAppliesGlobally = true;
    function addFrame() {
        if (!window.frames['__cmpLocator']) {
        if (document.body) {
            var body = document.body,
                iframe = document.createElement('iframe');
            iframe.style = 'display:none';
            iframe.name = '__cmpLocator';
            body.appendChild(iframe);
        } else {
            // In the case where this stub is located in the head,
            // this allows us to inject the iframe more quickly than
            // relying on DOMContentLoaded or other events.
            setTimeout(addFrame, 5);
        }
        }
    }
    addFrame();
    function cmpMsgHandler(event) {
        var msgIsString = typeof event.data === "string";
        var json;
        if(msgIsString) {
        json = event.data.indexOf("__cmpCall") != -1 ? JSON.parse(event.data) : {};
        } else {
        json = event.data;
        }
        if (json.__cmpCall) {
        var i = json.__cmpCall;
        window.__cmp(i.command, i.parameter, function(retValue, success) {
            var returnMsg = {"__cmpReturn": {
            "returnValue": retValue,
            "success": success,
            "callId": i.callId
            }};
            event.source.postMessage(msgIsString ?
            JSON.stringify(returnMsg) : returnMsg, '*');
        });
        }
    }
    window.__cmp = function (c) {
        var b = arguments;
        if (!b.length) {
        return __cmp.a;
        }
        else if (b[0] === 'ping') {
        b[2]({"gdprAppliesGlobally": gdprAppliesGlobally,
            "cmpLoaded": false}, true);
        } else if (c == '__cmp')
        return false;
        else {
        if (typeof __cmp.a === 'undefined') {
            __cmp.a = [];
        }
        __cmp.a.push([].slice.apply(b));
        }
    }
    window.__cmp.gdprAppliesGlobally = gdprAppliesGlobally;
    window.__cmp.msgHandler = cmpMsgHandler;
    if (window.addEventListener) {
        window.addEventListener('message', cmpMsgHandler, false);
    }
    else {
        window.attachEvent('onmessage', cmpMsgHandler);
    }
    })();
    window.__cmp('init', {
    		'Language': 'fr',
		'Initial Screen Title Text': 'Le respect de votre vie privée est notre priorité',
		'Initial Screen Reject Button Text': 'Je refuse',
		'Initial Screen Accept Button Text': 'J&#039;accepte',
		'Initial Screen Purpose Link Text': 'Afficher toutes les utilisations prévues',
		'Purpose Screen Title Text': 'Le respect de votre vie privée est notre priorité',
		'Purpose Screen Body Text': 'Vous pouvez configurer vos réglages et choisir comment vous souhaitez que vos données personnelles soient utilisées en fonction des objectifs ci-dessous. Vous pouvez configurer les réglages de manière indépendante pour chaque partenaire. Vous trouverez une description de chacun des objectifs sur la façon dont nos partenaires et nous-mêmes utilisons vos données personnelles.',
		'Purpose Screen Vendor Link Text': 'Afficher la liste complète des partenaires',
		'Purpose Screen Cancel Button Text': 'Annuler',
		'Purpose Screen Save and Exit Button Text': 'Enregistrer et quitter',
		'Vendor Screen Title Text': 'Le respect de votre vie privée est notre priorité',
		'Vendor Screen Body Text': 'Vous pouvez configurer vos réglages indépendamment pour chaque partenaire listé ci-dessous. Afin de faciliter votre décision, vous pouvez développer la liste de chaque entreprise pour voir à quelles fins il utilise les données. Dans certains cas, les entreprises peuvent révéler qu&#039;elles utilisent vos données sans votre consentement, en fonction de leurs intérêts légitimes. Vous pouvez cliquer sur leurs politiques de confidentialité pour obtenir plus d&#039;informations et pour vous désinscrire.',
		'Vendor Screen Accept All Button Text': 'Tout Accepter',
		'Vendor Screen Reject All Button Text': 'Tout Refuser',
		'Vendor Screen Purposes Link Text': 'Revenir aux Objectifs',
		'Vendor Screen Cancel Button Text': 'Annuler',
		'Vendor Screen Save and Exit Button Text': 'Enregistrer et quitter',
		'Initial Screen Body Text': 'Nos partenaires et nous-mêmes utilisent différentes technologies, telles que les cookies, pour personnaliser les contenus et les publicités, proposer des fonctionnalités sur les réseaux sociaux et analyser le trafic. Merci de cliquer sur le bouton ci-dessous pour donner votre accord. Vous pouvez changer d’avis et modifier vos choix à tout moment',
		'Initial Screen Body Text Option': 1,
		'Publisher Name': 'Baboulinet',
		'Display UI': 'always',
		'Publisher Purpose IDs': [1,2,3,4,5],
		'Consent Scope': 'service',
    });
</script>




      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
    $("#del").click(function() {
   result = window.confirm("Etes vous certain de vouloir supprimer ce produit?");
  //  var pro_id = document.getElementById("pro_id").val();
   if(result == true){
   document.location.href = '<?= site_url('welcome/delete/'.$produits->pro_id); ?>';
   alert('Ce produit à bien été supprimé');}
    });
   </script>

      
  </footer>
  </body>
</html>


