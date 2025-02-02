<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{

    public function hapusDataMenuManagement($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('user_menu', ['id' => $id]);
    }

    public function getMenuById($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }

    public function ubahMenuManagement()
    {
        $data = [
            "menu" => $this->input->post('menu', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', $data);
    }


    public function getSubmenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                    ";
        return $this->db->query($query)->result_array();
    }

    public function hapusDataSubMenu($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('user_sub_menu', ['id' => $id]);
    }


    public function ubahSubMenuManagement()
    {
        $data = [
            "title" => $this->input->post('title', true),
            'menu_id' => $this->input->post('menu_id'),
            "url" => $this->input->post('url', true),
            "icon" => $this->input->post('icon', true),
            'is_active' => $this->input->post('is_active')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_sub_menu', $data);
    }

    public function getSubMenuById($id)
    {
        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }

    public function getMenu($id)
    {
        // $id = $this->session->userdata('id');
        $query = "SELECT `user_menu`.`menu`
        FROM `user_menu`
        WHERE `user_menu`.`id` = $id
          ";
        return $this->db->query($query)->result_array();
    }
}