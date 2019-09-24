<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_snavigation extends CI_Controller {

    private $table = 'side_menu';

    public function getAll()
    {
        return $this->db->get($table)->result();
    }

}

/* End of file M_snavigation.php */
