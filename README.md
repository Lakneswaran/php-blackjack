# php-blackjack
Solo - OOP first project
<!-- 

Task : 


Final push: 1 & 2: miss the word "click"
Nice to have: reveal of dealer cards at the end
Change code in Card.php -> add css class
-> add note to explain why we show the score of the dealer
rename the "surrender" method to "lose"
-> add a nice to have "catch going bust first 2 cards"


example if I would ask you to instantiate the player class you would do the following: -->


# new Player();  -> Object

<!-- storing the player, and the dealer inside the properties of the blackjack class -->

# $this->propertyName = new ClassName(property1Value, property2Value);

<!-- constructors do as callback fuction-->

# function greet($message) {
echo $message;
}

# greet('hello!');


<!-- one point from our code to another. -->

# class GreetMachine
{
private string $greeting;
public function __construct(string $message) {
$this->greeting = $message;
}
}

# $helloGreeting = new GreetMachine('hello!');     // hello string to object $helloGreeting

<!-- using require  -->

same as include in js.

<!-- ----------------------------------------------------------------------------------------------------->

- Getters => find the properties; access of the properties
- Setter  => set or change a pivate properties for us. 

// getters

public function getEmail(){
    return $this -> email;
}

// setter

public function setEmail($email){               //laknes...
    if(strpos($email, "@") > -1){               // compare with the userone variable email rony@ become laknes@
        $this -> email = $email;
    }
}

$username -> setEmail("laknes@yahoo.com");


 <!-- When we use OOP, we get more advantage of it. it's a software pattn get a clear structure.object, clas and function ->  A architecture.  -->

 - Use file name as class name
 - A set of properties are called Class
 - class name0{
      function __construct(){
          echo "";
      }
     function name1(){

     }
     function name2(){

     }
 }

 <!-- To access this function inside of class name0 we need to call first class name1, then we have access to the function name1 or name2 -->
# OOP Basic
 # creating new objects

 $nameunique = new name0; 
# Obect      -  function
 $nameunique-> name1();

 <!-- the class will not run till we call them -->
 <!-- A class have set of funtions -->

 # function __construct()

 <!-- whenever we call the function this fuction will run always and first. -->




















 


