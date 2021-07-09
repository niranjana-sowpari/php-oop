"traits" 



- problems occurs when we have multi-level inheritance
- problem is that it might be the case that class3 doesn't require fun1() but class4 needs it then what to do?


- traits are a type of classes and they are made exactly like classes .

- so basically traits are saying in place of inheritance let us bring the concept of traits. That is if you need the properties of a class/trait then use it 
and if you dont need it then dont use it.

 - it wont even matter if your parent class had used another trait or not. The trait wont be accessible outside of the parent class.

 - MAIN THING IS TO IDENTIFY WHOSE PROPERTIES YOU ACTUALLY NEED , ONLY THOSE TRAITS YOU SHOULD USE.

- PROPERTY OF TRAIT
[ a trait is accessible only within the scope of the used class ]

- YOU CANNOT INSTANTIATE A TRAIT CLASS


BUT HERE WE CAN SEE THAT CLASS3 HAS THE FUN1 ?? HOW ??




USE OF MULTIPLE TRAITS :

trait1::fun1 insteadof trait2;
trait2::fun1 as fun2;                       //alias