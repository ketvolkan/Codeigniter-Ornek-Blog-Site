<?php

class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("post_model");
    }
    public function index()
    {
        $posts = $this->post_model->getAll();
        $viewData = array(
            "posts" => $posts,
        );
        $this->load->view('blog', $viewData);
    }
    public function posts()
    {
        $posts = $this->post_model->getAll();
        $viewData = array(
            "posts" => $posts,
        );
        $this->load->view('posts', $viewData);
    }
    public function contact()
    {
        $this->load->view('contact');
    }
    public function about()
    {
        $this->load->view('about');
    }
}
