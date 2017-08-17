<?php
   class Stud_Model extends CI_Model {

      function __construct() {
         parent::__construct();
      }

      public function insert($data) {

         echo '<script type="text/javascript"> alert("Added")</script>';

         if ($this->db->insert("stud", $data)) {
            return true;
         }
      }

      public function delete($roll_no) {
         echo '<script type="text/javascript"> alert("Deleted")</script>';

         if ($this->db->delete("stud", "roll_no = ".$roll_no)) {
            return true;
         }
      }

      public function update($data,$old_roll_no) {

         echo '<script type="text/javascript"> alert("Updated")</script>';

         $this->db->set($data);
         $this->db->where("roll_no", $old_roll_no);
         $this->db->update("stud", $data);
      }
   }
?> 
