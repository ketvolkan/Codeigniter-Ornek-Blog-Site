<?php

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("contact_model");
    }

    public function insert()
    {
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $subject = $this->input->post("subject");
        $message = $this->input->post("message");

        $insert = $this->contact_model->insert(array(

            "name" => $name,
            "email" => $email,
            "subject" => $subject,
            "message" => $message,

        ));

        if ($insert) {
            redirect(base_url("Post/contact?status=ok"));
        } else {
            redirect(base_url("Post/contact?status=error"));
        }
    }
}
