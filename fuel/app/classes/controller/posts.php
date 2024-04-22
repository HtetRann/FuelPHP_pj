<?php

class Controller_Posts extends Controller_Template
{
	
	public function action_index()
	{
		$data = array();
        $this->template->title = 'Blog Posts';
        $this->template->content = View::forge('posts/index', $data);
	}

	public function action_add()
	{
		$data = array();
        $this->template->title = 'Posting Page';
        $this->template->content = View::forge('posts/add', $data);
	}

	
}
