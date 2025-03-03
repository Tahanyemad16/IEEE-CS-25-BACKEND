# Research

## 1.what is PHP

 PHP is a general-purpose scripting language geared towards web development.It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.The PHP reference implementation is now produced by the PHP Group. PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive acronym PHP: Hypertext Preprocessor.

[Reference](https://en.wikipedia.org/wiki/PHP)

---


## 2.what r the three main error types in PHP

Error is the fault or mistake in a program. It can be several types. Error can occur due to wrong syntax or wrong logic. It is a type of mistakes or condition of having incorrect knowledge of the code.

There are various types of errors in PHP but it contains basically four main type of errors.

Parse error or Syntax Error: It is the type of error done by the programmer in the source code of the program. The syntax error is caught by the compiler. After fixing the syntax error the compiler compile the code and execute it. Parse errors can be caused dues to unclosed quotes, missing or Extra parentheses, Unclosed braces, Missing semicolon 

Fatal Error: It is the type of error where PHP compiler understand the PHP code but it recognizes an undeclared function. This means that function is called without the definition of function.

Warning Errors : The main reason of warning errors are including a missing file. This means that the PHP function call the missing file.

[Reference](https://www.geeksforgeeks.org/php-types-of-errors/)

---


## 3.echo vs print

cho and print are more or less the same. They are both used to output data to the screen.

The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

[Reference](https://www.w3schools.com/php/php_echo_print.asp)

---


## 4.sensitivity in PHP.

  PHP is a case-sensitive language, which means that variables, function names, and other identifiers are distinguished by their capitalization. This means that “hello” and “Hello” are considered different variables in PHP.

  To avoid errors like this, it’s important to be consistent with your capitalization when naming variables, functions, and other identifiers in your PHP code.

  However, there are some exceptions to PHP’s case sensitivity rules. For example, function and method names are not case-sensitive in PHP versions before 8.0.0, which means that you can call a function using different capitalization without producing an error. 

  [Refernce](https://tutorialspoint.learnerstv.in/php-case-sensitivity/)


  ---

## 5.programming language vs scripting language.

  - **Programming language**

    - One needs to compile the programming languages to machine code so as to run them on the hardware of an underlying OS (operating system). A user needs to deploy a certain Integrated Development Environment (IDE) for using programming languages. A programmer needs to provide an instruction set for the computers for achieving certain goals. One can also implement certain algorithms by writing the programs.
    - Out of all the programming languages present in the market, specific documentation dominates a majority of them. All the other languages comprise dominant implementation (treated as a reference). An example here is that the ISO standard associates with the C programming language. On the other hand, languages like Perl belong to the latter category.
    - One can use a programming language for transforming data. It basically happens when creating those CPU instructions that jot down the input info into the output. An example here is using a set of conditions for solving an equation set. One can consider various programming languages such as C, C++, Scala, Java, etc., as general-purpose languages. These fall under the compiled programming languages. You must add some texts to write the score code, and then you can run them through a compiler. As a result, it would create various binary instructions.

  - **scripting language**
   
    - Scripting languages help in automating various software apps, web pages in a browser, shell usage of an OS (operating system), etc. The scripting languages like VBScript, Perl, Javascript, etc., do not require compilation, and they have less access to any computer’s native abilities. It is because these rather run on an original programming language’s subset. An example here could be that the Javascript won’t have the ability to access your file system.
    - Generally, a scripting language is interpreted. It doesn’t primarily focus on building applications- but it can render behavior to an application that already exists. It basically helps in writing codes for targeting a software system. Thus, it can also automate a given operation on any software system. So basically, scripts act as a set of instructions that target any software system.
    - The scripting languages have eventually evolved and become more powerful. They now no longer create minute scripts for automating a software system’s operations. One can also use scripting languages for building rich applications. These can customize, manipulate, and automate an existing system’s facilities. The scripting languages come 

[Reference](https://byjus.com/gate/difference-between-scripting-and-programming-languages/)

 ---

 ## 6.dynamically typed vs statically typed language.

 - **Static Typing**
    - Static typing is a typing system where variables are bound to a data type during compilation. Once a variable is assigned a data  type it remains unchanged throughout the programs execution. This binding promotes type safety and detects errors at an early stage.
    One of the advantages of typing is ensuring type safety which reduces the chances of runtime errors caused by mismatches in data types.

 - **dynamic typing**
    - dynamic typing allows variables to be bound to data types at runtime instead of during compilation. This flexibility enables concise code and ease of use. It compromises on type safety as a trade-off.
    One of the advantages of typing is its flexibility. In dynamically typed languages variables have the ability to change their data type during runtime. This allows for adaptability in situations. 


[Reference](https://www.bairesdev.com/blog/static-vs-dynamic-typing/)


---

## 7.Assign by Value VS Assign by Reference.
  - **Assign by Value:**
    - In this method value of the variable is passed. Changes made to formal will not affect the actual parameters.
    - Different memory locations will be created for both variables.
    - Here there will be a temporary variable created in the function stack that does not affect the original variable.
  - **Assign By Reference:** 
    - In Pass by reference address of the variable is passed to a function. Whatever changes made to the formal parameter will affect   the actual parameters:
      - The same memory location is used for both variables. (Formal and Actual)
      - It is useful when you are required to return more than 1 value.

[Reference](https://community.dynamics.com/blogs/post/?postid=af0c5e11-7c2f-486b-8737-a9f613d75737)


---

## 8.What is the difference between for and foreach loop in PHP?

 - **for loop**

   The for loop works at the end of the given condition. It is used for the implementation of variables and works in a single way. The for loop does not work in the case of associative arrays. A for loop basically consists of three portions or parts. 

    - A variable is initialized with a value.
    - The variable is subjected to the condition to which it is compared.
    - Increment/decrement loop counter.

 - **foreach Loop**

    The foreach loop works at the end of the array count. This loop can work with variables as well as associative arrays. Therefore, this loop can be implemented in more than one way. The foreach loop is much better and performs better in comparison to the for loop.   


[Reference](https://www.geeksforgeeks.org/what-is-the-difference-between-for-and-foreach-loop-in-php/)

---

