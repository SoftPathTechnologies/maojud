<?php
class Email_model extends CI_Model
{


    function send_message(){
        if ($this->config->item('protocol') == "smtp") {
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = $this->config->item('smtp_hostname');
            $config['smtp_user'] = $this->config->item('smtp_username');
            $config['smtp_pass'] = $this->config->item('smtp_password');
            $config['smtp_port'] = $this->config->item('smtp_port');
            $config['smtp_timeout'] = $this->config->item('smtp_timeout');
            // $config['mailtype'] = $this->config->item('smtp_mailtype');
            // $config['charset'] = $this->config->item('utf-8');
            // $config['mailtype'] = $this->config->item('html');
            $config['starttls']  = $this->config->item('starttls');
            $config['newline']  = $this->config->item('newline');

            $this->email->initialize($config);
        }

        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');

        $fromemail  =  $this->session->userdata('email').' '.$this->session->userdata('phone');;
        $fromname   = $this->session->userdata('name');
        $subject    = $this->session->userdata('subject');

        $message = $this->session->userdata('message');  

        $user_email = "info@etherageglobal.com";
        $this->email->to($user_email);
        $this->email->from($fromemail, $fromname);
        $this->email->subject($subject);
        $this->email->message($message);
        if (!$this->email->send()) {
            return false;
            show_error($this->email->print_debugger());
        } else {
            return true;
        }
    }

    
}
