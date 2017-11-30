<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
   public function __construct()
        {
                parent::__construct();
                $this->load->model('Client');
                $this->load->helper('url_helper');
                $this->load->library('session');
        }


   public function index()
  {
           $output['clients'] = $this->Client->get_listes('client');
           $output['contents'] = "client/vue";
           //die("ca marche");
           //$this->load->view('templates/header', $data);
           //var_dump($output);
           $this->load->view('templates/template',$output);
           
           
           //$this->load->view('templates/footer');
   }
   public function voir($id)
  {
    $produits=[];
           $output['client'] = $this->Client->get_listes('client',$id,'num_cli');
           $produits= $this->Client->get_relation_client('produit',$id);
           $payement= $this->Client->get_relation_client('payement',$id);
           $output['produits']=$produits;
           $output['payement']=$payement;
           $recettes=$this->calcul_recette($produits);
           $output['total_r']=$recettes;
           $total_pays=$this->calcul_pay($payement);
           $output['total_p']=$total_pays;
           $this->session->set_userdata('solde',$recettes-$total_pays);
           //die("ca marche");
           $output['contents'] = "client/voir";
           //$this->load->view('templates/header', $data);
           
           $this->load->view('templates/template',$output);
           
           
           //$this->load->view('templates/footer');
   }

   /*******Produits**************/
   public function produit()
  {
           $output['produits'] = $this->Client->get_listes('produit');
           $output['contents'] = "produit/vue";
           //die("ca marche");
           //$this->load->view('templates/header', $data);
           //var_dump($output);
           $this->load->view('templates/template',$output);
           
           
           //$this->load->view('templates/footer');
   }
   public function voir_prod($id)
  {
    
    $output['produit'] = $this->Client->get_listes('produit',$id,'code_prod');
    $output['contents'] = "produit/voir";
    //die("ca marche");
    //$this->load->view('templates/header', $data);
    //var_dump($this->Client->get_produits_client($id));
    $this->load->view('templates/template',$output);


           //$this->load->view('templates/footer');
   }

  public function voir_vente($id)
  {
    
    $output['produit'] = $this->Client->get_listes('vente',$id,'code_vente');
    $output['contents'] = "vente/voir";
    //die("ca marche");
    //$this->load->view('templates/header', $data);
    //var_dump($this->Client->get_produits_client($id));
    $this->load->view('templates/template',$output);


           //$this->load->view('templates/footer');
   }
   /*public function view($login = NULL)
   {
           $data= $this->User->get_users($login);
           $this->load->view('user/vue', $data);
   }*/
  public function login(){
    $this->load->view('login/login');
  }


  public function pay()
  {
           $output['pays'] = $this->Client->get_listes('payement');
           $output['contents'] = "payement/vue";

           //die("ca marche");
           //$this->load->view('templates/header', $data);
           //var_dump($output);
           $this->load->view('templates/template',$output);           
           
           
           //$this->load->view('templates/footer');
   }
   public function vente()
  {
           $output['ventes'] = $this->Client->get_listes('vente');
           $output['contents'] = "vente/vue";
           //die("ca marche");
           //$this->load->view('templates/header', $data);
           //var_dump($output);
           $this->load->view('templates/template',$output);
           
           
           //$this->load->view('templates/footer');
   }


  public function client_add($id = FALSE)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    //$data['title'] = 'Create a news item';

    $this->form_validation->set_rules('nom_cli', 'Nom client', 'required');
    $this->form_validation->set_rules('num_cli', 'N° client', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        //$this->load->view('templates/header', $data);
      if($id === FALSE){
        $output['contents'] = "client/add";
        $this->load->view('templates/template',$output);
      }
      else{
        $this->session->set_userdata('num_cli',$id);
        $output['client'] = $this->Client->get_listes('client',$id,'num_cli');
        $output['contents'] = "client/updt";
        $this->load->view('templates/template',$output);
      }
        
        //$this->load->view('templates/footer');

    }
    else
    {
      if($this->input->post('typa')==='add')  {
        $data = array(
        'nom_cli' => $this->input->post('nom_cli'),
        'num_cli' => $this->input->post('num_cli'),
        'prenom_cli' => $this->input->post('prenom_cli'),        
        'adresse' => $this->input->post('adresse'),
        'cin' => $this->input->post('cin'),
        'tel' => $this->input->post('tel'),
    );
        
        
          $this->Client->add('client',$data);
      } else {
        $data = array(
        'nom_cli' => $this->input->post('nom_cli'),        
        'prenom_cli' => $this->input->post('prenom_cli'),        
        'adresse' => $this->input->post('adresse'),
        'cin' => $this->input->post('cin'),
        'tel' => $this->input->post('tel'),
    );
        $this->Client->update('client',$data,$this->session->userdata('num_cli'),'num_cli');
        
      }
        
        
          
        
        //$this->load->view('news/success');
    }
  }



  public function produit_add($id=FALSE)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->helper('date');

    $output['clients'] =$this->toArray($this->Client->get_listes_prim('client','num_cli'));
    //var_dump($output);
    //var_dump(mdate('%Y/%m/%d',now()));
    $this->form_validation->set_rules('Clientnum_cli', 'Client', 'required');
    $this->form_validation->set_rules('code_prod', 'N° produit', 'required|is_unique[produit.num_prod]');

    if ($this->form_validation->run() === FALSE)
    {
        if($id === FALSE){
          $output['contents'] = "produit/add";
           $this->load->view('templates/template',$output);
          //$this->load->view('produit/add',$output);
        }
        else{
          $this->session->set_userdata('num_prod',$id);
          $output['produit'] = $this->Client->get_listes('produit',$id,'code_prod');
          $place=$this->get_rank($output['clients'],$output['produit']['Clientnum_cli']);
          var_dump($place);
          $output['place']=$place;
          $output['contents'] = "produit/updt";
          $this->load->view('templates/template',$output);
        }
        //$this->load->view('templates/footer');

    }
    else
    {
      $recette=$this->input->post('quantite')*$this->input->post('prix_g')-$this->input->post('depense') ;
      //var_dump($this->input->post('typa'));
      if($this->input->post('typa')==='add') {
        $data = array(
        'Clientnum_cli' => $output['clients'][$this->input->post('Clientnum_cli')],
        'code_prod' => $this->input->post('code_prod'),
        'quantite' => $this->input->post('quantite'),
        'prix_g' => $this->input->post('prix_g'),
        'depense' => $this->input->post('depense'),
        'recette' => $recette,
        'date_pro' => mdate('%Y/%m/%d',now()),
        );
        $this->Client->add('produit',$data);        
      } 
      else {
          $data = array(
        'Clientnum_cli' => $output['clients'][$this->input->post('Clientnum_cli')],        
        'quantite' => $this->input->post('quantite'),
        'prix_g' => $this->input->post('prix_g'),
        'depense' => $this->input->post('depense'),
        'recette' => $recette,
        'date_pro' => mdate('%Y/%m/%d',now()),
        );
          $this->Client->update('produit',$data,$this->session->userdata('num_prod'),'code_prod');
      }
        
        
        //$this->load->view('news/success');
    }
  }


  public function pay_add($id=FALSE)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->helper('date');

    $output['clients'] =$this->toArray($this->Client->get_listes_prim('client','num_cli'));
    //var_dump($output);
    //var_dump(mdate('%Y/%m/%d',now()));
    $this->form_validation->set_rules('num_cli', 'Client', 'required');
    $this->form_validation->set_rules('num_payement', 'N° payement', 'required|is_unique[payement.num_payement]');
    $this->form_validation->set_rules('montant', 'Montant', 'callback_verif_recette');
    $output['id_cli']=$id;
    $output['solde']=$this->session->userdata('solde');
    var_dump($this->session->userdata('solde'));
    if ($this->form_validation->run() === FALSE)
    {
        //if($id === FALSE){
          $this->session->set_userdata('num_pay',$id);
          $output['contents'] = "payement/add";
        
          $this->load->view('templates/template',$output);
        //}
        /*else{
          $this->session->set_userdata('num_pay',$id);
          $output['pay'] = $this->Client->get_listes('payement',$id,'num_payement');
          $place=$this->get_rank($output['clients'],$output['pay']['Clientnum_cli']);
          var_dump($place);
          $output['place']=$place;
          $this->load->view('payement/updt',$output);
        }*/
        //$this->load->view('templates/footer');

    }
    else
    {
      //$recette=$this->input->post('quantite')*$this->input->post('prix_g')-$this->input->post('depense') ;
      var_dump($this->input->post('typa'));
      if($this->input->post('typa')==='add') {
        $data = array(
        'Clientnum_cli' => $this->input->post('num_cli'),
        'num_payement' => $this->input->post('num_payement'),
        'montant' => $this->input->post('montant'),
        'date_payement' => $this->input->post('date_payement'),        
        );

        $this->Client->add('payement',$data);        
      } 
      else {
          $data = array(
        'Clientnum_cli' => $this->input->post('num_cli'),        
        'montant' => $this->input->post('montant'),
        'date_payement' => $this->input->post('date_payement'),  
        );
          $this->Client->update('payement',$data,$this->session->userdata('num_pay'),'num_payement');
      }
        
        
        $this->load->view('views/success');
    }
  }
  public function pay_updt($id=FALSE)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->helper('date');

    $output['clients'] =$this->toArray($this->Client->get_listes_prim('client','num_cli'));
    
    $this->form_validation->set_rules('num_cli', 'Client', 'required');
    $this->form_validation->set_rules('num_payement', 'N° payement', 'required');
    $this->form_validation->set_rules('montant', 'Montant', 'callback_verif_recette_updt');
    
    $output['solde']=$this->session->userdata('solde');
    if ($this->form_validation->run() === FALSE)
    {
          $this->session->set_userdata('num_pay',$id);
          $output['pay'] = $this->Client->get_listes('payement',$id,'num_payement');
          
          $num_cli=$this->Client->get_listes("payement",$id,"num_payement")['Clientnum_cli'];
          $payements= $this->Client->get_relation_client('payement',$num_cli);
          
          $produits= $this->Client->get_relation_client('produit',$num_cli);
          
          $total_r=$this->calcul_recette($produits);
          $total_p=$this->calcul_pay($payements);
          $this->session->set_userdata('solde',$total_r-$total_p);
          //$output['place']=$place;
          $output['solde']=$total_r-$total_p;
          $output['contents'] = "payement/updt";
          $this->load->view('templates/template',$output);
        //}
        //$this->load->view('templates/footer');

    }
    else
    {
      //$recette=$this->input->post('quantite')*$this->input->post('prix_g')-$this->input->post('depense') ;
      
      
          $data = array(
                
        'montant' => $this->input->post('montant'),
        'date_payement' => $this->input->post('date_payement'),  
        );
          $this->Client->update('payement',$data,$this->session->userdata('num_pay'),'num_payement');                    
        $this->load->view('success');
    }
  }


  public function vente_maj($id = FALSE)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    //$data['title'] = 'Create a news item';

    $this->form_validation->set_rules('code_vente', 'CODE VENTE', 'required');
    $this->form_validation->set_rules('nom_vendeur', 'NOM_VENDEUR', 'required');
    $this->form_validation->set_rules('date_vente', 'DATE VENTE', 'required');
    $this->form_validation->set_rules('quantite', 'QUANTITE', 'required');
    $this->form_validation->set_rules('prix_unitaire', 'PRIX UNITAIRE', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        //$this->load->view('templates/header', $data);
      if($id === FALSE){
        $output['contents'] = "vente/add";
        $this->load->view('templates/template',$output);
      }
      else{
        $this->session->set_userdata('code_vente',$id);
        $output['vente'] = $this->Client->get_listes('vente',$id,'code_vente');
        $output['contents'] = "vente/updt";
        $this->load->view('templates/template',$output);
      }
        
        //$this->load->view('templates/footer');

    }
    else
    {      
      
          $total=($this->input->post('quantite'))*($this->input->post('prix_unitaire'));
        # code...
      
      if($this->input->post('typa')==='add')  {
        $data = array(
        'code_vente' => $this->input->post('code_vente'),
        'nom_vendeur' => $this->input->post('nom_vendeur'),
        'nom_acheteur' => $this->input->post('nom_acheteur'),        
        'quantite' => $this->input->post('quantite'),
        'prix_unit' => $this->input->post('prix_unitaire'),
        'prix_totale' => $total,
        'date_vente' => $this->input->post('date_vente'),
    );
        
        
          $this->Client->add('vente',$data);
      } else {
        $data = array(
        'nom_vendeur' => $this->input->post('nom_vendeur'),
        'nom_acheteur' => $this->input->post('nom_acheteur'),        
        'quantite' => $this->input->post('quantite'),
        'prix_unit' => $this->input->post('prix_unitaire'),
        'prix_totale' => $total,
        'date_vente' => $this->input->post('date_vente'),
    );
        $this->Client->update('vente',$data,$this->session->userdata('code_vente'),'code_vente');
        
      }
        
        
          
        
        //$this->load->view('news/success');
    }
  }
  
  public function verif_recette($montant){
    //$=$this->Client->get_listes('payement',$id,'num_payement');
    $cli=$this->session->userdata('num_pay');
    $payement= $this->Client->get_listes('payement',$cli,'num_payement');
    var_dump($payement);
    $produits= $this->Client->get_relation_client('produit',$payement['Clientnum_cli']);
    
    $total_r=$this->calcul_recette($produits);
    $total_p=$this->calcul_pay($payement);

    if($montant>($total_r-$total_p)){
      $this->form_validation->set_message('verif_recette', 'Montant doit etre inférieur à '.($total_r-$total_p)."Ar");

      return FALSE;
    }
    return TRUE;

  }
  public function verif_recette_updt($montant){
    //$=$this->Client->get_listes('payement',$id,'num_payement');
    

    if($montant> $this->session->userdata('solde'));
    {
      $this->form_validation->set_message('verif_recette', 'Montant doit etre inférieur à '.$this->session->userdata('solde')."Ar");

      return FALSE;
    }
    return TRUE;

  }
  public function toArray($tab){
    $res = array();
    foreach ($tab as $key ) {
      array_push($res,$key->num_cli);
    }
    return $res;

  }
  public function get_rank($donnee,$n){
    $i=0;
    foreach ($donnee as $key) {  
      var_dump($n." ".$key);    
      if($n === $key){
        
        return $i;
      }
      $i++;
    }
    return 0;
  }

  public function calcul_recette($donnee){
    $somme=0;
    foreach ($donnee as $key) {
      $somme+=$key['recette'];
    }
    return $somme;
  }
  public function calcul_pay($donnee){
    $somme=0;
    foreach ($donnee as $key) {
      $somme+=$key['montant'];
    }
    return $somme;
  }

}
