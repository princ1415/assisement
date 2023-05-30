<?php
$fruits = array();
function displayMenu()
{
    echo "welcome to fruit market\n";
    
    echo "1. manager\n";
    echo "2. Customer \n";
    echo "3. Exit\n";
     $x = readline("Select your role \r\n");

     
     if($x == 1)
     {
        manager();
     }
     if($x == 2)
     {
        customer();
     }
     
    }
    function manager(){   
           print("welcome to fruit market manager \n");
           
           print("1.Add fruit stock \n"); 
           print("2.view fruit stock \n");
           print("3.update fruit stock \n");
           
       }
        
       function addfruitstock()
       {
           global $fruit;
       
           echo "Enter fruit name: ";
           $fruitName = readline();
           echo "Enter qty: ";
           $fruitqty = readline();
           echo "Enter price: ";
           $fruitprice = readline();
       }
       $fruits = array(
        'fruit name' => $fruitName ,
        'fruit qty' => $fruitqty,
        'fruit price' =>$fruitprice
       );
        $fruits[] = $fruit;
        echo "fruit added successfully!\n";
    
    function viewfruitstock()
    {
        global $fruit;
        $found = false;
        foreach ($fruit as $fruits) {
        
            echo "fruit name: " . $fruit['fruit name'] . "\n";
            echo "fruit qty: " . $fruit['fruit qty'] . "\n";
            echo "fruit price: " . $fruit['fruit price'] . "\n";
            $found = true;
            break;
        }
    }
   function customer()
   {

   }
            while (true) {
                displayMenu();
                
             $choice = readline("Select options...");
                 if ($choice == 1) {
                        
                     addfruitstock();
                 }elseif ($choice == 2) {
                     viewfruitstock();
                 }elseif ($choice == 3) {
                    // updatefruitstock();
                } elseif ($choice == 4) {
                    echo "Thank you for using the fruit managemet console. Goodbye!\n";
                    break;
                 }
                 
                 
                  else {
                        echo "Invalid choice. Please try again.\n";
                  }
                }
                ?>
               