# LARAVEL RSEARCH

## 1-Request lifecycle

 -Request Life Cycle in ServiceDesk Plus allows admins to formulate a request resolution process with built-in guidance for the help desk technician. Through a simple drag and drop process, the SDAdmin can create a visual process builder and define the resolution process. You can create, discuss, and rework the process drafts before publishing the life cycle. 

 -When entering the server infrastructure, the HTTP request can be handled by several component such as a firewall, a load balancer, or a reverse proxy before arriving on the web server itself.

 -When arriving at a web server, the request is filtered by Apache virtual host, Nginx Server Blocks, or equivalent. There, requests of static resources are separated from requests to PHP interpreter.

 -As Ibexa DXP is a Symfony application, the handling of requests starts like in Symfony (see Symfony and HTTP Fundamentals).

 -If the HTTP request is to be treated by Ibexa DXP, it goes to the public/index.php of the Symfony Front Controller.

-The front controller transforms the HTTP request into a PHP Request object and passes it to Symfony's Kernel to get a Response object that is transformed and sent back as an HTTP response.

[Reference](https://www.google.com/search?q=Request+lifecycle&oq=Request+lifecycle&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIJCAEQABgTGIAEMgkIAhAAGBMYgAQyCQgDEAAYExiABDIJCAQQABgTGIAEMgoIBRAAGBMYFhgeMgoIBhAAGBMYFhgeMgoIBxAAGBMYFhgeMgoICBAAGBMYFhgeMgwICRAAGAoYExgWGB7SAQc0MTFqMGo3qAIAsAIA&sourceid=chrome&ie=UTF-8)

---

## 2-Routing in Laravel
In Laravel, a route tells an application how it should respond to different HTTP requests. For instance, what happens when the GET request is made to specific URLs. Routes sit between the user’s request and the action your application will perform.

Routes are defined in the routes directory, which contains multiple files. routes/web.php for web application and for APIs, routes/api.php.

When a user accesses a URL, Laravel checks the routes and then matches the request to the correct URL and the HTTP method.

 **Basic Route Example**:

```php
Route::get('/', function () {
    return view('welcome');
});
```
[Reference](https://www.cloudways.com/blog/routing-in-laravel/)

---

## 3-Facades
-Throughout the Laravel documentation, you will see examples of code that interacts with Laravel's features via "facades". Facades provide a "static" interface to classes that are available in the application's service container. Laravel ships with many facades which provide access to almost all of Laravel's features.

-Laravel facades serve as "static proxies" to underlying classes in the service container, providing the benefit of a terse, expressive syntax while maintaining more testability and flexibility than traditional static methods. It's perfectly fine if you don't totally understand how facades work - just go with the flow and continue learning about Laravel.

-Facades have many benefits. They provide a terse, memorable syntax that allows you to use Laravel's features without remembering long class names that must be injected or configured manually. Furthermore, because of their unique usage of PHP's dynamic methods, they are easy to test.

[Reference](https://laravel.com/docs/12.x/facades)

---

## 4-Blade Templates and how it works
 ### Blade Templates
   -Blade is the simple, yet powerful templating engine provided with Laravel. Unlike other popular PHP templating engines, Blade does not restrict you from using plain PHP code in your views. All Blade views are compiled into plain PHP code and cached until they are modified, meaning Blade adds essentially zero overhead to your application. Blade view files use the `.blade.php` file extension and are typically stored in the `resources/views` directory.

 ### how it works

 **Template Inheritance**

  - Defining A Layout

     Two of the primary benefits of using Blade are template inheritance and sections. To get started, let's take a look at a simple example. First, we will examine a "master" page layout. Since most web applications maintain the same general layout across various pages, it's convenient to define this layout as a single Blade view:
 
  ```html
  <!-- Stored in resources/views/layouts/master.blade.php -->

        <html>
            <head>
                <title>App Name - @yield('title')</title>
            </head>
            <body>
                @section('sidebar')
                    This is the master sidebar.
                @show

                <div class="container">
                    @yield('content')
                </div>
            </body>
        </html>
```
   this file contains typical HTML mark-up. However, take note of the `@section` and `@yield` directives. The `@section` directive, as the name implies, defines a section of content, while the `@yield` directive is used to display the contents of a given section.

  - Extending A Layout

    When defining a child page, you may use the Blade `@extends` directive to specify which layout the child page should "inherit". Views which `@extends` a Blade layout may inject content into the layout's sections using `@section` directives. Remember, as seen in the example above, the contents of these sections will be displayed in the layout using `@yield`:
  
```php
       <!-- Stored in resources/views/child.blade.php -->

        @extends('layouts.master')

        @section('title', 'Page Title')

        @section('sidebar')
            @@parent

            <p>This is appended to the master sidebar.</p>
        @endsection

        @section('content')
            <p>This is my body content.</p>
        @endsection
```
[Reference](https://laravel.com/docs/5.1/blade#template-inheritance)

---


## 5-What is the ORM ,why it is so useful
**What is ORM?**
 - ORM is a communication tool between your project and the database. You can perform database connection and query operations using ORM in your project. Some of the common advantages of ORM include the ability to convert class properties to tables instead of creating tables on the database manually. Additionally, the general queries that come with ORM allow us to perform operations on the database without the need to write any database code.

 - ORM first maps the entity properties to record them in a special format (like XML). It connects to the database with connection information (config file) and creates tables by querying with the information it has saved.  

**why it is so useful**
  
  - The connection between ORM and the database is not dependent on what the database is, making it easier to switch to another database.
  - ORM automation reduces the likelihood of errors in most database operations.
  - Since ORM supports many programming languages, you can use the database you want in the programming language you want.
  - ORM supports custom queries, so you can use your own queries with ORM.

  [Reference](https://medium.com/@kadergenc/what-is-orm-why-is-it-used-what-are-its-pros-and-cons-3ed77c0e6ed2)

  ---
  
## 6-Defining relationships in Eloquent models

  Database tables are often related to one another. For example, a blog post may have many comments, or an order could be related to the user who placed it. Eloquent makes managing and working with these relationships easy, and supports several different types of relationships:

  - **One To One**

       A **one-to-one** relationship is a very basic relation. For example, a User model might be associated with one Phone. To define this relationship, we place a phone method on the User model. The phone method should call the hasOne method and return its result:
    ```php
        <?php
        
        namespace App;
        
        use Illuminate\Database\Eloquent\Model;
        
        class User extends Model
        {
            /**
            * Get the phone record associated with the user.
            */
            public function phone()
            {
                return $this->hasOne('App\Phone');
            }
        }
    ```
        
   - **One To Many**

     A **"one-to-many"** relationship is used to define relationships where a single model owns any amount of other models. For example, a blog post may have an infinite number of comments. Like all other Eloquent relationships, one-to-many relationships are defined by placing a function on your Eloquent model:
        ```php
        <?php
        
        namespace App;
        
        use Illuminate\Database\Eloquent\Model;
        
        class Post extends Model
        {
            /**
            * Get the comments for the blog post.
            */
            public function comments()
            {
                return $this->hasMany('App\Comment');
            }
        }
        ```
   
- **Many To Many**

   **Many-to-many** relations are slightly more complicated than hasOne and hasMany relationships. An example of such a relationship is a user with many roles, where the roles are also shared by other users. For example, many users may have the role of "Admin". To define this relationship, three database tables are needed: users, roles, and role_user. The role_user table is derived from the alphabetical order of the related model names, and contains the user_id and role_id columns.

   Many-to-many relationships are defined by writing a method that returns the result of the belongsToMany method. For example, let's define the roles method on our User model:
   ```php
    <?php
    
    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    class User extends Model
    {
        /**
        * The roles that belong to the user.
        */
        public function roles()
        {
            return $this->belongsToMany('App\Role');
        }
    }
    ```

- **Has Many Through**
The **"has-many-through"** relationship provides a convenient shortcut for accessing distant relations via an intermediate relation. For example, a Country model might have many Post models through an intermediate User model. In this example, you could easily gather all blog posts for a given country.
  
- **Polymorphic Relations**
  Table Structure Polymorphic relations allow a model to belong to more than one other model on a single association. For example, imagine users of your application can "comment" both posts and videos. Using polymorphic relationships, you can use a single comments table for both of these scenarios.  

[Reference](https://laravel.com/docs/5.5/eloquent-relationships#polymorphic-relations)

---

## 7-Attaching, syncing, detaching related records
- **Attach a database**
   
   You can attach a copied or detached SQL Server database. When you attach a SQL Server 2005 (9.x) database that contains full-text catalog files onto a SQL Server server instance, the catalog files are attached from their previous location along with the other database files, the same as in SQL Server 2005 (9.x). For more information, see Upgrade Full-Text Search.

   When you attach a database, all data files (.mdf and .ndf files) must be available. If any data file has a different path from when the database was first created or last attached, you must specify the current path of the file.

- **Syncing a database**
   
   It’s a common problem in syncing offline data: You can easily sync your explicit changes, but how do you update affected related records? You can do it manually with enough knowledge, determination, and perspicacity, but that’s the old way.
   
- **Detach a database**

   Detaching a database removes it from the instance of SQL Server but leaves the database intact within its data files and transaction log files. These files can then be used to attach the database to any instance of SQL Server, including the server from which the database was detached.

[Reference](https://learn.microsoft.com/en-us/sql/relational-databases/databases/database-detach-and-attach-sql-server?view=sql-server-ver16)

---

## 8-The N+1 query problem in Laravel

 The N+1 query problem occurs when an application makes one initial query to the database followed by an additional query for each result obtained from the first query. This typically happens in object-relational mapping (ORM) frameworks when dealing with relationships between models.

 For instance, imagine a scenario in a Laravel application where you need to display all posts and their associated comments on a webpage. An intuitive approach might involve loading all posts first and then iterating through each post to load its related comments:
```php
$posts = Post::all();
foreach ($posts as $post) {
    $comments = $post->comments; // Additional query for each post
}
```
In this example, if there are N posts, the first query retrieves all the posts, and then N additional queries are executed to fetch the comments for each post. Hence, for N posts, there will be N+1 queries to the database: 1 for retrieving all the posts and N for fetching the comments for each post.

[Reference](https://loadforge.com/guides/optimizing-laravel-applications-by-detecting-n1-queries)

---

## 9-What is the XSRF or CSRF ... is there a difference between them??
  **CSRF** is a malicious activity that involves an attacker performing actions on behalf of an authenticated user. Fortunately, Laravel provides out-of-the-box measures to prevent this type of vulnerability.
  
  **CSRF** attacks user sessions. They do this by tricking a user into sending a request through hidden form tags or malicious URLs (images or links) without the user's knowledge.This attack leads to a change in the state of the user session, data leaks, and attackers can sometimes manipulate end-users data in an application.
  - How to Prevent CSRF Requests

    Each time there’s a request to modify user information on the server-side (back end) like `POST`, `PUT`, `PATCH`, and `DELETE`, you need to include a `@csrf` in the HTML form request. The `@csrf` is thus a Blade directive used to generate a hidden token validated by the application.

    [Reference](https://www.freecodecamp.org/news/laravel-web-security-csrf/)

    ### Difference Between Them
    **csrf** :
      - Is used in html forms (not ajax)
      - Produced in backend while rendering html form.
      - we can not set request header in html forms directly, so an easy way is to send it via form input as a hidden field.
      - you can name this hidden input whatever you want. e.g. <input name="my_csrf_input" value="a_hashed_string_the_csrf_value"

    **x-csrf-token**:
      - is added to the request header for ajax requests.
      - To use it, we can put the csrf value in a meta tag while rendering the html, then in front end we can get the value from that meta tag and send it to backend.
      - Laravel specific: When using laravel as backend. Laravel checks this header automatically and compares it to the valid csrf value in database.(laravel has a middleware for this)

[Reference](https://stackoverflow.com/questions/42408177/what-is-the-difference-between-x-xsrf-token-and-x-csrf-token)

---

## 10-What is Livewire?
  **Livewire** is a full-stack framework for Laravel that makes building dynamic interfaces simple, without leaving the comfort of Laravel.It allows us to write highly interactive web apps with PHP, Laravel, and Blade. No more bending the knee to a client-side JavaScript framework. Livewire got your back! Livewire let you create the interactivity of an SPA without having to learn yet-another frontend framework.
  - How we do this work?
    - Livewire renders the initial component output with the page (like a Blade include). This way, it's SEO friendly.
    - When an interaction occurs, Livewire makes an AJAX request to the server with the updated data.
    - The server re-renders the component and responds with the new HTML.
    - Livewire then intelligently mutates DOM according to the things that changed.

[Reference](https://laravel-livewire.com/)

---

## 11-Give examples and explain them in 3 lines at least about 5 packages that are most use
 1. **Laravel Debugbar**

    These development packages help you streamline your development workflow with tools for debugging, asset compilation, and code generation.

2. **Laravel User Verification**

   **The Laravel User Verification package** simplifies user onboarding by handling email verification and validation. It offers flexibility to customize email templates, verification logic, and the user experience to perfectly fit your application’s needs.

   Plus, the package integrates seamlessly with Laravel’s authentication and notification systems, saving you development time and effort.

3. **Eloquent-Sluggable**

   Tired of manually crafting SEO-friendly URLs? *Laravel Eloquent-Sluggable* automates the process! This handy tool generates unique slugs based on your model attributes, creating clean and search-engine-friendly URLs for your Laravel application.
 
   Eloquent-Sluggable offers customization options for slug fields, separators, and update behavior. Plus, it provides hooks for handling special cases and integrating your own logic, ensuring your URLs are always optimized.

4. **Migrations Generator**

   Struggling with manual database migration creation in Laravel? **The Laravel Migrations Generator package** is here to help! This time-saving tool analyzes your existing database schema and automatically generates migration files.

   Focus on building your application logic, not writing migrations. Simply run the provided command to generate migrations for all your database tables at once. Let Laravel Migrations Generator handle the heavy lifting!

5. **Laravel Backup**

   Don’t risk losing valuable data! **The Laravel Backup package** safeguards your application by creating backups. It zips up your chosen directories and database, ensuring a complete snapshot of your project.

   You can create a complete snapshot of your project with a single command, including files and database. This simplifies the backup process and keeps your application safe and secure.

[Reference](https://www.cloudways.com/blog/best-laravel-packages/)

---

## 12-Laravel Gates

 - **Laravel Gates** are a way to manage authorization in Laravel. Gates are closures that decide whether or not a user is allowed to perform a given action and are typically defined in the app/providers/AuthServiceProvider class using the Gate facade, which provides methods for defining and checking Gates. For example, you could create a Gate that only allows users with administrative privileges to access certain pages or features of your application.

 - How to Define a Laravel Gate
  
    To define a Gate in Laravel, we use the Gate::define() method. This method takes two arguments, the name of the gate, and a callback function that defines the Gate's logic. The callback function should return a boolean value indicating whether the user is authorized to access the resource.

For example, we can define a Gate that checks if the user is an administrator as follows:

```php
use Illuminate\Support\Facades\Gate;

Gate::define('admin', function ($user) {
    return $user->isAdmin();
});
```
[Reference](https://www.twilio.com/en-us/blog/rapid-introduction-laravel-gates)

---

## 13-Sanctum vs Passport

- **Laravel Sanctum**
  - **Laravel Sanctum** introduced in Laravel 7, is a simple authentication package designed primarily for single-page applications (SPAs), mobile applications, and token-based APIs. It offers a lightweight solution that focuses on the personal access token and cookie-based session authentication.

- **Laravel Passport** 
  - **Laravel Passport** is an OAuth2 server implementation that offers more advanced API authentication than Sanctum. Passport was created to provide an OAuth2 server for Laravel applications, making it an ideal choice for apps requiring third-party access, token revocation, refresh tokens, and more advanced authentication flows.

  [Reference](https://medium.com/@chirag.dave/laravel-sanctum-vs-passport-choosing-the-right-authentication-for-your-app-4438c85bf900)

  ---

 ## 14-Guard vs middleware
  **Guards**:
  
  -  Guards in Laravel define how users are authenticated in  your application. They determine where the application should look for user credentials and how to verify them. Laravel provides multiple guard drivers out of the box, such as `web` (for browser sessions) and `api` (for API token authentication).

  - How to Implement Guards:
   
    You can configure guards in the config/auth.php file. For example, the "web" guard might be configured to use session-based authentication, while the "api" guard could use token-based authentication.

    ```php
    'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],
    ],
    ```
    [Reference](https://sagardhiman021.medium.com/laravel-guards-gates-and-policies-understanding-implementation-and-key-differences-5d56186603c7)

  **Middleware**
   - Middleware provide a convenient mechanism for inspecting  and filtering HTTP requests entering your application. For example, Laravel includes a middleware that verifies the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to your application's login screen. However, if the user is authenticated, the middleware will allow the request to proceed further into the application.


 [Reference](https://laravel.com/docs/12.x/middleware)


  ---