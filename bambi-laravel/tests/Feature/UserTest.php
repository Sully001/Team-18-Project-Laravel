<?php

namespace Tests\Feature;

use PDO;
use Faker\Factory;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_login_form() {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
    }

    //Test to store user to the database
    public function test_does_form_store_user_and_redirect() {
        $response = $this->post(route('register'), [
            'first_name' => 'Dary',
            'last_name' => 'James',
            'email' => 'dj@gmail.com',
            'password' => 'dary123',
            'password_confirmation' => 'dary1234',
        ]);
        $response->assertRedirect('/');
    }

    //Test to see if user exists
    public function test_database_has_user() {
        $this->assertDatabaseHas('users', [
            'first_name' => 'Dary',
            'last_name' => 'James',
            'email' => 'dj@gmail.com',
        ]);
    }

    //Test to see if all routes are accessible
    // public function test_all_routes_are_accessible() {
    //     $routes = Route::getRoutes();
    //     foreach($routes as $route) {
    //         $response = $this->get($route->uri);
    //         $response->assertStatus(200);
    //     }
    // }

    public function testLoggedInUserCanAccessBasket()
    {
        // Create a user and log them in
        $faker = Factory::create();
        $user = User::create([
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'email' => $faker->safeEmail(),
            'password' => Hash::make(1),
        ]);

        $this->actingAs($user->fresh());

        // Visit the basket page
        $response = $this->get('/basket'.'/'.$user->id);
        // Assert that the response has a status code of 200 (OK)
        $response->assertStatus(200);
        // Assert that the response contains the user's name
        $response->assertSee($user->name);
        // Assert that the response contains the text "Basket"
        $response->assertSee('Basket');
        $user->delete();
    }

    public function test_logged_in_user_accesses_orders() {
        $faker = Factory::create();
        $user = User::create([
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'email' => $faker->safeEmail(),
            'password' => Hash::make(1),
        ]);
        $this->actingAs($user->fresh());
        $response = $this->get('orders');
        $response->assertStatus(200);
        $user->delete();
    }

    public function test_logged_in_user_accesses_order_details() {
        $faker = Factory::create();
        $user = User::create([
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'email' => $faker->safeEmail(),
            'password' => Hash::make(1),
        ]);
        $this->actingAs($user->fresh());
        $response = $this->get('orders');
        $response->assertStatus(200);
        $user->delete();
    }

    
    public function testDatabaseConnection()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=bambi_site', 'root', '');
        $this->assertInstanceOf(PDO::class, $pdo);
    }
}