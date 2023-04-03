![plot](./bambi-laravel/public/images/Bambi_Shoes_Logo_no-bg.png)
<img src="./bambi-laravel/public/images/Bambi_Shoes_Logo_no-bg.png" width="80" height="80">


Bambi! A part of an e-commerce project that was built using the Laravel framework.

<h1>Description</h1>
Bambi is a high end, high quality fashion e-commerce store selling the greatest and latest in designer shoes. The backend of this site was built with a PHP framework (Laravel). The front end of the site was built using HTML, CSS and Javascript. Our database uses MySQL and it is hosted on Azure.

-------------------------------------------------------------------------------------------------

<h2>Website Features</h2>
Various product categories are available for the user to choose from.

<ul>
  <li>Users can create accounts and login/logout of the site</li>
  <li>Products are listed and are available to be added to a user's basket</li>
  <li>Users can deleted items from their basket</li>
  <li>Users can checkout</li>
  <li>Users can view past orders</li>
  <li>There's an about/contact/welcome page</li>
  <li>Users can recieve email notifications when registering and purchasing items</li>
</ul>

-------------------------------------------------------------------------------------------------

<h1>Setup Requirements</h1>
<ul>
  <li>PHP Version <= 8.1.10</li>
  <li>Laravel Version <=9.41.0</li>
  <li>Composer Version <= 2.4.2</li>
  <li>XAMPP (For any OS)</li>
</ul>


<h3>Working locally</h3>
<ol>
  <li>Make sure that XAMPP is installed on your local machine</li>
  <li>Make sure that Composer is installed as well</li>
  <li>Clone this Github repo</li>
  <li>Change the filename of (example.env) => (env)</li>
  <li>
    Make sure that your database variables are correct.
        <ul>
            <li>DB_CONNECTION=mysql</li>
            <li>DB_HOST=localhost</li>
            <li>DB_PORT=3306</li>
            <li>DB_DATABASE=laravel_site</li>
            <li>DB_USERNAME=root</li>
            <li>DB_PASSWORD=''</li>
        </ul>
  </li>
</ol>

Next run the command `php artisan migrate:refresh --seed`
This will automatically create an admin account for you, which is the 
first admin at the bottom of this file

1. `Move into the laravel-site directory`
2. Run command `composer install` in the terminal
3. `php artisan key:generate`
4. `php artisan serve`
5. Open the website in your browser `http://127.0.0.1:8000`



