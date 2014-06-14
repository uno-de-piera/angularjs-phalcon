<?php

class PostsController extends \Phalcon\Mvc\Controller
{

	private $_posts = array();

    public function getAction()
    {
    	$this->view->disable();
    	if($this->request->isGet() == true)
    	{
    		$posts = Posts::find();
    		foreach($posts as $post)
    		{
    			$this->_posts[] = $post;
    		}

    		$this->response->setJsonContent(array("posts" => $this->_posts));
    		$this->response->setStatusCode(200, "OK");
    		$this->response->send();
    	}
    	else
    	{
    		$this->response->setStatusCode(404, "Not Found");
    	}
    }

}

