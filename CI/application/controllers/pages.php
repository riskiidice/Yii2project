<?php

class Pages extends CI_Controller {

        public function view($page = 'home')
        {
          $this->load->library('session');
          $this->session->userdata('item');
          //$this->session->set_flashdata('item', 'value');
          $newdata = [
                   'username'  => 'johndoe',
                   'email'     => 'johndoe@some-site.com',
                   'logged_in' => TRUE
              ];
          $this->session->set_userdata($newdata);
          //echo $this->session->flashdata('item');
          echo $this->session->all_userdata();
          exit();
	  if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }



        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
        }
}


