
<?php
class Client extends CI_Model  {

  protected $primary_key = null;
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
  public function get_listes($table,$num = FALSE,$cle_p = FALSE)
  {
          if ($num === FALSE && $cle_p === FALSE)
          {
                  //$query = $this->db->get('user');
                  return $this->db->get($table)->result();
                  //$query->result_array();
          }

          $query = $this->db->get_where($table, array($cle_p => $num));
          return $query->row_array();
  }
  public function get_listes_prim($table,$cle_p = FALSE,$num = FALSE)
  {
          if ($cle_p === TRUE )
          {
            $this->db->select($cle_p);
          }
          if ($num === FALSE )
          {
                  //$query = $this->db->get('user');
                  
                  return $this->db->get($table)->result();
                  //$query->result_array();
          }

          $query = $this->db->get_where($table, array($cle_p => $num));
          return $query->row_array();
  }

  public function get_relation_client($table,$num)
  {         
          $query = $this->db->get_where($table, array('clientnum_cli' => $num));
          //return $query->row_array();
          return $query->result_array();
  }




  /*public function get_list_from_other($table, $key)
	{
		//$this->db->select('id, year, description');
		$this->db->where('Clientnum_cli', $key);
                //$this->db->order_by('id desc');
		return $this->db->get($table);
	}*/
  public function add($table,$data)
  {
      $this->load->helper('url');

      //$slug = url_title($this->input->post('title'), 'dash', TRUE);

      

      return $this->db->insert($table, $data);
  }

  public function update($table,$data,$id,$prim)
  {
      $this->load->helper('url');
      $this->db->where($prim,$id);
      return $this->db->update($table, $data);
  }


}
