# OOP Research

## 1.who invent OOP and why

 - Who Invented OOP?
   - Alan Kay invented the term, but:
      - he has openly stated that most of what people call object oriented programming wasn’t what he had in mind, and
      - whether you use the term as he says he intended, or as other people have interpreted it, other people seem to have actually    done it first.

 - Why?

   Because it allowed them to force a style of programming which is completely agnostic of the information held by other VMs. You can’t get at that information anyways. As a result, the resulting programs were extremely tolerant to internal changes of the VMs. You could replace at runtime one VM with some information with another VM that had a completely different information (and was maybe built long after the system started running) and everything just continued working fine.

   Another reason for this approach was the observation that computers get faster, and a 10x as fast computer can simulate 10 computers, but 10 computers normally can’t simulate a 10x as fast computer. So just having 10 computers doesn’t enable you to run a 10x as “big” project.

[Reference](https://www.quora.com/Who-invented-Object-Oriented-Programming-OOP-and-what-was-the-motivation-and-inspiration)

---

## 2.Encapsulation & Abstraction
 Abstraction and Encapsulation are two of the fundamental concepts in Object-Oriented-Programming.

 They provide features such as code-reusability, overriding, security purpose, data hiding, and implementation hiding, which help to make the program easy to understand, maintain and secure. However, it can be quite confusing for a beginner to understand the difference between the two as both are related but are implemented in different ways and serve distinct purposes. In this article, we’ll learn about the differences along with code.

 -**Encapsulation** 
   Encapsultion is the concept of binding data and methods and preventing it from unauthorized access. It wraps up data and functions under a single unit. Another way to think about encapsulation is, that it is a protective shield that prevents the data from being accessed by the code outside this shield.

   Technically in encapsulation, the variables or data of a class are hidden from any other class and can be accessed only through any member function of its class in which they are declared. By providing controlled access, the data can be accessed and modified only through the methods and authorized users. As in encapsulation, the data in a class is hidden from other classes, so it is also known as data hiding. Encapsulation can be achieved by declaring all the variables in the class as private and writing public methods in the class to set and get the values of variables. 

  - **Abstraction**
   Data Abstraction is the property by virtue of which only the essential details are displayed to the user. The trivial or the non-essential units are not displayed to the user. Ex: A car is viewed as a car rather than its individual components. Data Abstraction may also be defined as the process of identifying only the required characteristics of an object ignoring the irrelevant details. The properties and behaviors of an object differentiate it from other objects of similar type and also help in classifying/grouping the objects.  

[Reference](https://www.geeksforgeeks.org/difference-between-abstraction-and-encapsulation-in-java-with-examples/)


---

## 3.Inheritance

  Inheritance in OOP = When a class derives from another class.
 
  The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

  An inherited class is defined by using the extends keyword.

  ```php

  <?php
 class superClass {
  protected $name;
  public function info($name) {
    echo "i'm super class";
  }
 }

class SubClass extends superClass {
  public function message() {
    echo $this->info();
  }
}
$object = new SubClass("parent");
$SubClass->message();
?>


  ```

## 4.PHP Interfaces & Polymorphism.
- **Interfaces**?

  Interfaces allow you to specify what methods a class should implement.

  Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".  

  ``` php
  <?php
   interface InterfaceName {
   public function someMethod1();
   public function someMethod2($name, $color);
   public function someMethod3() : string;
  }
  ?>

  ```
  [Reference](https://www.w3schools.com/php/php_oop_interfaces.asp)

- **Polymorphism**

  Polymorphism is a core principle of object-oriented programming (OOP) where objects of different classes can be treated as objects of a common superclass. It allows methods to perform different actions based on the object they are called upon, enhancing code flexibility and reusability.  

  ```php

  class Animal {
    public function makeSound() {
        return "Animal makes a sound.";
    }
  }
 
  class Dog extends Animal {
    public function makeSound() {
        return "Dog barks.";
    }
  }

  ```
  [Reference](https://www.geeksforgeeks.org/how-to-implement-polymorphism-in-php/)


---

## 5.PHP Traits

 **Traits** :PHP implements a way to reuse code called Traits.
   Traits are a mechanism for code reuse in single inheritance languages such as PHP. A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies. The semantics of the combination of Traits and classes is defined in a way which reduces complexity, and avoids the typical problems associated with multiple inheritance and Mixins.

   A Trait is similar to a class, but only intended to group functionality in a fine-grained and consistent way. It is not possible to instantiate a Trait on its own. It is an addition to traditional inheritance and enables horizontal composition of behavior; that is, the application of class members without requiring inheritance.

[Reference](https://www.php.net/manual/en/language.oop5.traits.php)

---

## 6.Late static binding & how it works

   programs are saved and then directly run on the browser, the script is executed through a web server and we get the output. We don’t compile PHP programs manually but that does not mean it is never compiled. The PHP interpreter does that for you and runs it. So there are two phases, first, compile-time and second run time. During the compile time, the normal variables are replaced with their values but the static keywords are replaced only in the run time. Overriding a property in child class and creating the instance of the child class, so to get the overridden output, the late static binding concept is used by writing static keyword before using the property. Whenever a PHP interpreter gets the request to compile a function. If it sees any static property, then it leaves the property pending for run time and the property gets its value during runtime from the function it is being called. This is called late static binding.

[Reference](https://www.geeksforgeeks.org/what-is-late-static-bindings-in-php/)

---

## 7.Using OOP with MySQL (PDO & MySQLi)

 - Both MySQLi and PDO have their advantages:

   PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.

   So, if you have to switch your project to use another database, PDO makes the process easy. You only have to change the connection string and a few queries. With MySQLi, you will need to rewrite the entire code - queries included.

- Both are object-oriented, but MySQLi also offers a procedural API.

- Both support Prepared Statements. Prepared Statements protect from SQL injection, and are very important for web application security.

  **Example (MySQLi Object-Oriented)**
  ```php
  <?php
   $servername = "localhost";
   $username = "username"; 
   $password = "password";

   // Create connection
   $conn = new mysqli($servername, $username, $password);

    // Check connection
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }
   echo "Connected successfully";
  ?>
  ```

  **Example (PDO)**
  ```php
   <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
   }
  ?>

---
## 8.Factory PatternAnonymous Classes
Factory method is a creational design pattern which solves the problem of creating product objects without specifying their concrete classes.

The Factory Method defines a method, which should be used for creating objects instead of using a direct constructor call (new operator). Subclasses can override this method to change the class of objects that will be created.

[Reference](https://refactoring.guru/design-patterns/factory-method/php/example)

---
## 9.Anonymous Classes

Anonymous classes mostly behave just like normal classes. You can extend other classes, implement interfaces, use traits, etc. You can pass arguments to the class through its constructor. One of the use cases you’ll find as an example in the documentation is giving access to private or protected properties to a nested anonymous class.

```php
$anonymous = new Class{
   public function introduce(){ 
     echo "Hello from anonymous class";
   }
};
$anonymous->introduce(); // Hello from anonymous class
```
[Reference](https://medium.com/@shahburhan/anonymous-classes-in-php-6eca8ed53063)


---

## 10.MVC Architecture
The Model-View-Controller (MVC) framework is an architectural/design pattern that separates an application into three main logical components Model, View, and Controller. Each architectural component is built to handle specific development aspects of an application. It isolates the business logic and presentation layer from each other. It was traditionally used for desktop graphical user interfaces (GUIs). Nowadays, MVC is one of the most frequently used industry-standard web development frameworks to create scalable and extensible projects. It is also used for designing mobile apps.

[Reference](https://www.geeksforgeeks.org/mvc-framework-introduction/)

---