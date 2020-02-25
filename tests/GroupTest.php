<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Post;

class GroupTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_can_create_group() {

        $data = [
            'name' => $this->faker->name(1,16),
            'description' => $this->faker->sentence(1,255),
        ];
        
        if (strlen($data["name"]) <= 16)
        {
            $response = $this->call('POST', route('group.store'), $data); 
            $this->assertEquals(201, $response->status());
        }else{
            $response = $this->call('POST', route('group.store'), $data); 
            $this->assertEquals(302, $response->status());
        }
		
	}

    public function test_can_show_group() {

        $group = factory(App\Group::class)->create();
		
		$response = $this->call('GET', route('group.show', $group->id)); 
		
        $this->assertEquals(201, $response->status());
    }

    public function test_can_delete_group() {

		$group = factory(App\Group::class)->create();
		
		$response = $this->call('DELETE', route('group.destroy', $group->id)); 
		
        $this->assertEquals(204, $response->status());

    }
	
	public function test_can_list_groups() {

		$group = factory(App\Group::class)->create();
		
		$response = $this->call('GET', route('group.index')); 
		
        $this->assertEquals(201, $response->status());
			
    }
	
}
