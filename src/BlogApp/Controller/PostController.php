<?php
namespace BlogApp\Controller;

use   BlogApp\Model\PostDAO;
use   BlogApp\Model\Post;
use   BlogApp\Persistence\AbstractController;

class PostController extends AbstractController {

	public function __construct() {
        parent::__construct(new PostDAO ());
    }
    
	public function insert($json) {
        $post = new Post($json->id,$json->email,$json->senha,$json->endereco);
        $this->getDao ()->insert ( $post );
        return ["message"=>"Post inserido com sucesso"];
	}
	
	public function update($id, $json){
		
	}
	public function delete($id){
		
	}
}