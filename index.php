<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        color: blue;
        
    }
    .customer{
        font-weight: bold;
        color: red;
        font-size: 18px;
        text-decoration: underline;
    }
    body{
        font-family: 'Courier New', Courier, monospace;
        text-align: center;
    }
</style>
<body>
    
</body>
</html>

<?php


     echo "<h1>Customer Loan Details: </h1>";

class BankLoan{
    public $name;
    public $salary;
    public $loanAmount;
    public $duration;

function displayInfo(){
    echo "<b>Name:</b> $this->name <br>";
    echo "<b>Salary:</b> $this->salary <br>";
    echo "<b>Loan Amount:</b> $this->loanAmount<br>";
    echo "<b>Duration:</b> $this->duration Months <br>";

} 
}


// ----------- Create Multiple Loan Customers -----------
     echo "<p class='customer'>Customer No 1 </p>";
$customer1 = new BankLoan();
$customer1->name="John Doe";
$customer1->salary=rand(30000, 300000);
$customer1->loanAmount=rand(10000, 100000);
$customer1->duration= rand(1, 24) ;
$customer1->displayInfo();

echo "<p class='customer'>Customer No 2 </p>";
$customer2 = new BankLoan();
$customer2->name="Ashir";
$customer2->salary=rand(30000, 300000);
$customer2->loanAmount=rand(10000, 100000);
$customer2->duration= rand(1, 24) ;
$customer2->displayInfo();

         echo "<p class='customer'>Customer No 3 </p>";
$customer3 = new BankLoan();
$customer3->name="Kashif";
$customer3->salary=rand(30000, 300000);
$customer3->loanAmount=rand(10000, 100000);
$customer3->duration= rand(1, 24) ;
$customer3->displayInfo();

     echo "<p class='customer'>Customer No 4 </p>";
$customer4 = new BankLoan();
$customer4->name="Ali";
$customer4->salary=rand(30000, 300000);
$customer4->loanAmount=rand(10000, 100000);
$customer4->duration= rand(1, 24) ;
$customer4->displayInfo();


?> 