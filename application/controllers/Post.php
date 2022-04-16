<?php

class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("menu_model");
        $this->load->model("post_model");
        $this->load->model("setting_model");
    }
    public function index()
    {
        $menus = $this->menu_model->getAll();
        $setting = $this->setting_model->getById(1);
        $posts = $this->post_model->getAll();
        $viewData = array(
            "posts" => $posts,
            "menus" => $menus,
            "setting" => $setting[0]
        );
        $this->load->view('blog', $viewData);
    }
    public function posts()
    {
        $setting = $this->setting_model->getById(1);
        $menus = $this->menu_model->getAll();
        $posts = $this->post_model->getAll();
        $viewData = array(
            "posts" => $posts,
            "menus" => $menus,
            "setting" => $setting[0]
        );
        $this->load->view('posts', $viewData);
    }
    public function contact()
    {
        $setting = $this->setting_model->getById(1);
        $menus = $this->menu_model->getAll();
        $viewData = array(

            "menus" => $menus,
            "setting" => $setting[0]
        );
        $this->load->view('contact', $viewData);
    }
    public function about()
    {
        $setting = $this->setting_model->getById(1);
        $menus = $this->menu_model->getAll();
        $viewData = array(
            "menus" => $menus,
            "setting" => $setting[0]
        );
        $this->load->view('about', $viewData);
    }
    public function postDetail()
    {
        $setting = $this->setting_model->getById(1);
        $menus = $this->menu_model->getAll();
        $currentId =  $this->input->get("id");
        $currentPost = $this->post_model->getById($currentId);

        $viewData = array(
            "currentPost" => $currentPost[0],
            "menus" => $menus,
            "setting" => $setting[0]
        );
        $this->load->view('post_detail', $viewData);
    }
}
