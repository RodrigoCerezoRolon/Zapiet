<?php

namespace Tests\Unit;

use App\Http\Controllers\TodoController;
use Tests\TestCase;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
    /** @test */
    public function test_get_todo_list_response(){
        $response=$this->get('http://127.0.0.1:8000/api/todoList');
        $response->assertStatus(200);
        $this->assertNotEmpty($response);
        $response->assertJsonStructure(['data']);
     
        
    }
    public function test_update_todo_item(){
        $id=2;
        $response=$this->post('http://127.0.0.1:8000/api/updateTodo/'.$id,['status'=>'pending']);
        $response->assertStatus(200);
        $response->assertJsonStructure(['message']);
    }
}
