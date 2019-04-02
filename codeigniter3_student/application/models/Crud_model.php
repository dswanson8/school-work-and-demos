<?php

class Crud_model extends CI_Model{

  function __construct(){

    parent::__construct();

  }


  function insert_letter($data){

    // testing to see what is in the array.
      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";

      // using code igniters unique language for DB queries. you can also use standard PHP/MySQL syntax.
      // in this case, this works only if the array items are named the same in the fields.
      $this->db->insert('letter', $data);
  }

  function get_letters(){

      $query = $this->db->get('letter');

      if ($query->num_rows() > 0) {
          return $query->result();
      }else {
          return FALSE;
      }

  }

  function get_letter_detail($id){

      $this->db->where('id', $id);
      $query = $this->db->get('letter');

      if ($query->num_rows() > 0) {
          return $query->result();
      }else {
          return FALSE;
      }
  }

  function edit_letter($data, $id){
      // on your own ... 2 lines of code to edit an item. Please code and test (using phpmyadmin as output)

      $this->db->where('id', $id);
      return $this->db->update('letter', $data);
  }

  function delete_row($id){
      // on your own ... 2 lines of code to edit an item. Please code and test (using phpmyadmin as output)

      $this->db->where('id', $id);
      return $this->db->delete('letter');
  }





}
