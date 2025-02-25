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