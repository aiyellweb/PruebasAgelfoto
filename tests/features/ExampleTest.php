<?php



class ExampleTest extends FeatureTestCase
{

    
    /**
     * A basic functional test example.
     *
     * @return void
     */
     function test_basic_example()

    {

        // creamos un usuario para que este autentificado utulizaremos el factory de laravel luego vamos y revizamso database/ModelFactory por defecto
        $user= factory(App\User::class)->create([
            'name'=>'Andres angel',
            'email'=>'admin@hotmail.com'
        ]);
        //luego nos aseguramos de que este user inicie session con el metodo  $this->actingAs($user,'api')recibe dos parametros el usuario y driver dodne quiere que se auntentifique 
        $this->actingAs($user,'api')->visit('api/user')
             ->see('Andres angel')
             ->see('admin@hotmail.com');
    }
}


