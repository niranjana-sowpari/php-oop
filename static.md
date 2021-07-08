"static members" 

members = variables + functions

[ STATIC VARIABLES + STATIC FUNCTIONS ] 

- keyword: static 
- static - they belong to the class
- accessed by the class name and not by the object name
- echo class1::$num; 



 SO WE CAN NOT ACCESS STATIC VARIABLES USING OBEJCTS BUT WE CAN ACCESS STATIC FUNCTIONS USING OBJECTS *******
****VERY IMPORTANT

[ MAKES SENSE, SO THAT OBJECTS CAN NOT CHANGE THE VALUE OF THE STATIC VARIABLES  ]


- statics cant refer to the $this because we need an object for that 
- but an object if calls a function can refer to self::$num because class is always available.

- static functions and variables can be used without calling the constructor

-
