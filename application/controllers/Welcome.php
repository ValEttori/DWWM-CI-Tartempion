<?php
// Sécurité pour empêcher l acces direct au script
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
     
    // Page d'accueil
    public function home()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('colonne');
        $this->load->view('footer');
    }
        
   // Page tableau 
   public function table()
   {
   //On selectionne tous les produits
   $requete = $this->db->query('SELECT * FROM produits')->result();
   $model["liste_produits"] = $requete;
   $this->load->view('header');
   $this->load->view('table', $model);
   $this->load->view('footer');
   }

   // Page contact
   public function contact()
   {
    $this->load->view('header');
    $this->load->view('contact');
    $this->load->view('footer');
   }

   // Page enregistrement
   public function register()
   {
    if ($this->input->post()) 
    { // 2ème appel de la page: traitement du formulaire
        $data = $this->input->post();

        // Si les trois champs sont bien renseignées
        if(!empty($data['email']) && !empty($data['password']) && !empty($data['confirm_password']))
        {
            //Si le mot de passe et la confirmation ne sont pas identiques
            if ($data['password'] != $data['confirm_password'])
                $model['message'] = 'Confirmez un mot de passe identique';
            //Si le mot de passe et la confirmation sont identiques
            else
            {  
                // On encrypte le mot de passe pour l'enregistrer dans la base
                $data['password'] = password_hash($data['password'],PASSWORD_BCRYPT);

                // Insertion dans la base
                $this->db->set('email', $data['email']);
                $this->db->set('password', $data['password']);
                $this->db->insert('users');

                // On redirige sur la page home avec un confirmation de création de compte
                $model['session']  = 'Le compte '.$data['email'].' a bien été créé';
                $this->load->view('header');
                $this->load->view('home', $model);
                $this->load->view('colonne');
                $this->load->view('footer');
            }
        }
        // Sinon, il manque un des trois champs
        else
        {
            $model['message'] = 'Veuillez renseigner les trois champs';
        }

        // Si il y a eu un problème on affiche le message
        if(!empty($model['message'])) {
            $this->load->view('header');
            $this->load->view('register',$model);
            $this->load->view('footer');
        }
    }
    else { // 1er appel de la page: affichage du formulaire
        $this->load->view('header');
        $this->load->view('register');
        $this->load->view('footer');
    }
   }

   // Page de connexion
   public function login($model = null)
   {
    if ($this->input->post()) 
    { // 2ème appel de la page: traitement du formulaire
        $data = $this->input->post();

        // Si les deux champs sont bien renseignées
        if(!empty($data['email']) && !empty($data['password']))
        {
            // On vérifie les informations en base
            $this->db->where('email', $data['email']);
            $query = $this->db->get('users'); // on selectionne l'utilisateur dans la table

            // Affiche un message si le compte n'existe pas
            if ($query->num_rows() == 0) {
                 $model['message']  = 'Le compte '.$data['email']. ' n\'existe pas';
            }        

            // On boucle sur les résultat (Même s'il ne doit y en avoir qu'un)
            foreach ($query->result() as $row)
            {
                // Si le mot de passe est correct
                if (password_verify($data['password'],$row->password))
                {
                    // On redirige sur la page home avec une confirmation de connexion
                    $model['session']  = 'Vous êtes bien connecté sous le mail '.$data['email'];
                    
                    // On remplis la session
                    $this->session->set_userdata('email', $data['email']);
                    $this->session->set_userdata('connected', true);
                    $this->load->view('header');
                    $this->load->view('home', $model);
                    $this->load->view('colonne');
                    $this->load->view('footer');
                }
                // Sinon
                else
                {
                    $model['message']  = 'Le mot de passe est incorrect';
                }
            }
        }
        // Il manque un champ
        else
        {
            $model['message'] = 'Veuillez renseigner tous les champs';
        }

        // Si il y a eu un problème on affiche le message
        if(!empty($model['message'])) {
            $this->load->view('header');
            $this->load->view('login',$model);
            $this->load->view('footer');
        }
    }
    else { // 1er appel de la page: affichage du formulaire
        $this->load->view('header');
        $this->load->view('login',$model);
        $this->load->view('footer');
    }
   }

   //Page de déconnexion
   public function logout()
   {
    // On deconnecte l'utilisateur
    if ($this->session->userdata('connected')) {
        $this->session->set_userdata('connected', false);
        $this->session->set_userdata('email',null);
    }
    redirect(site_url("welcome/login"));
   }

   //Page d'ajout de produit
   public function add()
   {
       // On récupére la liste des catégories pour affichage du menu déroulant
       $model = $this->selectCat();

       if ($this->input->post()) 
       { // 2ème appel de la page: traitement du formulaire
           $data = $this->input->post();// Permet de récupérer les données envoyées par le formulaire
           // Insertion des données en base  
           $data['pro_d_ajout'] = date("Y-m-d H:i:s");
           $data['pro_d_modif'] = date("Y-m-d H:i:s");  
           $this->db->insert('produits', $data);
           $this->load->helper('url');
           redirect( site_url("welcome/table") );//redirige le navigateur vers la méthode liste du contrôleur produits.
       }
       else { // 1er appel de la page: affichage du formulaire
           $this->load->view('header'); 
           $this->load->view('add', $model);
           $this->load->view('footer');
       }
     }
   
   //Page de détail et modification d'un produit
   public function update($id = null) // valeur par défaut si l'on viens du formulaire
   {
       // On récupére la liste des catégories
       $model = $this->selectCat();
       $this->load->database();
       
       if ($this->input->post()) 
       { // 2ème appel de la page: traitement du formulaire
           $data = $this->input->post();   
           $id = $this->input->post("pro_id");
           $data['pro_d_modif'] = date("Y-m-d H:i:s"); 
           $this->db->where('pro_id', $id);
           $this->db->update('produits', $data);
           $this->load->helper('url');
           redirect( site_url("welcome/table") );
       }
       else { // 1er appel de la page: affichage du formulaire
            $this->load->view('header');
            // On récupère le produit en base
            $requete = $this->db->query("SELECT * FROM produits WHERE pro_id= ?", array($id));
	
            // Si le produit n'existe pas, affichage d'un message d'erreur et on quitte
            if (!$requete->row()) 
            {
                echo"<p>Le produit n° ".$id." n'existe pas dans la base de données.</p>";    
                exit;             
            }            
           // On initialise la variable avec le produit (première (et seule) ligne renvoyée)
           $model["produits"] = $requete->row();
           $this->load->view('update', $model);
           $this->load->view('footer');}
       }
        
   // Fonction de suppression de produit
   public function delete($id)
       {
            // Requete de suppression du produit
            $this->db->where('pro_id', $id);
            $this->db->delete("produits");
            $this->load->helper('url');
            redirect( site_url("welcome/table") );
       }

    // Fonction permettant de renvoyer la catégorie   
    public function selectCat()
       { 
        $requete = $this->db->query('SELECT * FROM categories')->result();
        $model['catid'] = $requete;
        return $model;
       }       

       // Upload des images dans le tableau
       public function index()
       {
               $this->load->helper(array('form', 'url'));
               $this->load->library('form_validation');

                   // Upload de l'image //
                   $config['upload_path']          = './assets/Img/photo';
                   $config['allowed_types']        = 'gif|jpg|png';
                   $config['max_size']             = 2000;
                   $config['max_width']            = 2000;
                   $config['max_height']           = 1000;

                   // Récupération du code de l'image //
                   $this->load->library('upload', $config);
                   $this->upload->data();
                   $image = $this->upload->data('file_name');

                   // Vérification si le fichier a été uploadé //
                   if ( ! $this->upload->do_upload('pro_photo'))
                   {
                           $error = array('error' => $this->upload->display_errors());                         
                   }
                   else
                   {
                           $data = array('upload_data' => $this->upload->data());
                           $image = $this->upload->data('file_name');                  
                           
                   }
                }
}// Fin du controleur
?>