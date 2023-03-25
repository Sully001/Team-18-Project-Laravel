<?php

namespace Tests\Feature;

use PDO;
use Faker\Factory;
use Tests\TestCase;
use App\Models\User;
use App\Models\Basket;
use Illuminate\Support\Facades\Hash;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_login_form_is_accessible() {
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
    public function test_database_has_stored_user() {
        $this->assertDatabaseHas('users', [
            'first_name' => 'Dary',
            'last_name' => 'James',
            'email' => 'dj@gmail.com',
        ]);
    }

    public function test_assert_user_can_access_all_auth_routes() {
        $routes = ['/basket/remove', '/basket/{id}', '/basket', '/order', '/orders', '/order/{id}'];
        foreach($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(302);
        }
    }

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
        //Set session id
        session(['id' => $user->id]);
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

    public function testLoggedInUserCanViewAddedItemInBasket()
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
        //Set session id
        session(['id' => $user->id]);
        //Setup the users basket
        $basket = new Basket();
        $basket->user_id = $user->id;
        $basket->product_id = 1;
        $basket->size = 4;
        $basket->quantity = 1;
        $basket->save();
        // Visit the basket page
        $response = $this->get('/basket'.'/'.$user->id);
        // Assert that the response has a status code of 200 (OK)
        $response->assertStatus(200);
        // Assert that the response contains the user's name
        $response->assertSee("Alexander McQueen");
        // Assert that the response contains the text "Basket"
        $basket->delete();
        $user->delete();
    }

    public function testLoggedInUserCanNoLongerSeeDeletedItemInBasket()
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
        //Set session id
        session(['id' => $user->id]);
        //Setup the users basket
        $basket = new Basket();
        $basket->user_id = $user->id;
        $basket->product_id = 1;
        $basket->size = 4;
        $basket->quantity = 1;
        $basket->save();

        $basket->delete();
        // Visit the basket page
        $response = $this->get('/basket'.'/'.$user->id);
        // Assert that the response has a status code of 200 (OK)
        $response->assertStatus(200);
        // Assert that the response contains the user's name
        $response->assertDontSee("Alexander McQueen");
        // Assert that the response contains the text "Basket"
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

    
    public function testDatabaseConnectionSuccess()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=bambi_site', 'root', '');
        $this->assertInstanceOf(PDO::class, $pdo);
    }

    public function testSessionVariablesHaveNoErrors()
{
    // Set a session variable
    session(['foo' => 'bar']);

    // Get the session variable
    $foo = session('foo');

    // Assert that the session variable is accessible and has the expected value
    $this->assertEquals('bar', $foo);

    // Check for session errors
    $this->assertFalse(session()->has('errors'), 'Session errors detected.');
}
}