"interface" 

 -********************************* We needed interface to resolve an issue in Inheritance ***************************************

 - In php , multiple inheritance is not possible directly through inheritance.
Alternate - interface

 - So whenever we need multiple inheritance, we can use interface

Interface ae just like classes with a little differences:

 - Interface can contain only abstract functions(or no functions)
 -  in interface we cant define variables

- in abstract classes we could have variables
- No constructors in interface [ makes sense because we dont have any attributes to initialise ]
- all functions are public

- class class3 "implements" class1

- ***************  Access type for interface method inter1::fun1() must be omitted in C:\wamp64\www\oop\interface.php on line 4

- we dont write the keyword "abstract" prior the functions of the interface

- we cant  extend more than one class
 - but we can implement more than one interface
- we extend one class + implement one or more interfaces at the same time


[ well multiple extend of classes is not allowed beacuse more than one class can have functions of same name and when we need one of 
  the functions we just dont know which one to refer to ]

- we cant create objects of an interface