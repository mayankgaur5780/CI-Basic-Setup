<?php defined('BASEPATH') or exit('No direct script access allowed');

class Admin_m extends MY_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->table_name = 'admins';
        $this->primary_key = 'id';
        $this->created_at = true;
        $this->updated_at = true;
    }
}
