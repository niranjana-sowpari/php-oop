"inheritance" 

Constructor2 will be called instead of Constructor1 because inheritance states that one class can inherit the properties of the second class but can also have it's
own properties, it's just that if they have anything in common, the common part is not repeated again and again but if I put __constructor() again in the second/
child class then it clearly means that the second class is implying that I want my own __construct definition but I am inheriting everything else.

And thus construct2 is called instead of construct1 ==> overriding 
