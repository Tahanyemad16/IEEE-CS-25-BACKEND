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