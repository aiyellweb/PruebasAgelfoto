<?php

 class CreatePostsTest extends FeatureTestCase

 	{

 	function test_a_user_create_a_post(){ 
 		
 		$title=" esto es una pregun";
 		$content="Este es el contenido";

 		$this->actingAs($this->defaultUser());


 		$this->visit(route('posts.create'))
 		->type($title,'title')
 		->type($content,'content')
 		->press('Publicar');

 		$this->seeInDatabase('post',[
 			'title'=>$title,
 			'content'=>$content,
 			'pending'=>true,	

 			]);

 		// con este metodo saber si el user fue redirijido a otra pagina
 		$this->seeInElement('h1',$title);


 	}
 	
 	}



