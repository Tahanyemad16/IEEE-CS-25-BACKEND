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