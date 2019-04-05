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
      // $this->db->where('letter.id', $id);

      $this->db->where('letter.lid', $id);

      // JOIN TABLE
      $this->db->join('tank_users', 'letter.auth_id = tank_users.id');

      $query = $this->db->get('letter');

      if ($query->num_rows() > 0) {
          return $query->result();
      }else {
          return FALSE;
      }

  }

  function edit_letter($data, $id){
      // on your own ... 2 lines of code to edit an item. Please code and test (using phpmyadmin as output)

      $this->db->where('lid', $id);
      return $this->db->update('letter', $data);
  }

  function delete_row($id){
      // on your own ... 2 lines of code to edit an item. Please code and test (using phpmyadmin as output)

      $this->db->where('lid', $id);
      return $this->db->delete('letter');
  }


  function check_owner($item_id, $user_id){

      // this will have 2 WHERE claus's
      // 1: WHERE item_id is the id of the letter:
      // 2: WHERE user_id is the id of the person logged in

      $this->db->select('*');
      $this->db->from('letter');
      $this->db->where('lid', $item_id);
      $this->db->where('auth_id', $user_id);
      $query = $this->db->get(); //indicating that this person got that item

      if ($query->num_rows() > 0) {
          return $query->result();
      }else {
          return FALSE;
      }



      // do a basic select, if it returns something, then this user owns that item.
      // if it returns FALSE, then nothing was found in the db for this user AND that item, so they DO NOT own it.... in the controller we kick them out.
      // $query = $this->db->get('letters');


      if ($query->num_rows() > 0) {
          return $query->result();
      }else {
          return FALSE;
      }
  }




}
