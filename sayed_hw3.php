<?php


//guess game of suffle words


/** 
$word = 'neli';
$afterSuffle = str_shuffle($word);

//echo $afterSuffle;

if($afterSuffle === 'line')
{
echo "Wel done";
}
else
{
    echo "not matched,, try again";
}
*/



//password length check (6 to 8)char- project 1


/** 
$password = 'abcd12345';
$totalLength = strlen($password);

if($totalLength >= 6)
{
    if($totalLength <= 8)
    {
        echo "Normal password (6 to 8)";
    }
    else
    {
        echo "error!! too long paasword";
    }

}
else
{
    echo "error!! too short paasword";
}
*/


//password length (6 to 8)char -project 2


/** 
$password = 'abcd12345';
$totalLength = strlen($password);

//echo ($totalLength);

if($totalLength >= 6 && $totalLength <= 8 )
{
echo "Normal password";
}
else
{
    echo "wrong password";   
}
*/




// file extention check

/*
$filename = 'name.exe.jpg.mp3.mp4.wmv';
$checkExtention = explode('.',$filename);
echo end($checkExtention);
*/

/** 
$filename = 'name.exe.wmv.jpg.mp3.mp4.html';
$nameParts = explode('.',$filename);
$fileExtention = end($nameParts);

//echo $fileExtention;

if($fileExtention === 'php')
    {
        echo "acceptable file"; 
    }
else
    {
        echo "wrong file";
    }
*/





// chack valid email id

/** 
$email = 'sayed@gmail';

if(strpos($email, '@'))
{
   if(strpos($email, '.com'))
   {
    echo "this vaild mail id";
   }
   else {
    echo "invalid! must right '.com' at end";
         }
}        

else
    {
echo "invalid! plz enter '@' sign";
    }
*/




//call array element / change: associative array

/**
$user = ['email' => 'sayed@gmail.com', 'password' => '1234',
'userNAme' => 'Sayed','phone' => 1812341234];

$user ['email'] = 'bablu@gmail.com';
$user ['phone'] = '1867896879';

var_dump ($user);
*/




//call array element: multi diamention array


/**
$user = ['name' => 'Sayed',
        'password' => '1234',

'contact' => [

    'phone' => ['personal'=> '18123123123', 'home' => '17789123789'],
    'email' => ['main'=>'sayed@gmail.com','optional'=>'bablu@gmail.com']

            ],

        ];
        
        
echo "<pre>";

var_dump($user);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo $user['contact']['phone']['personal'];
*/



// some array function

//strrev(); word will revised

//str_shuffle();

//strpos(); to find any word from sentense, then stop

//stripos(); insensetive , Sayed > saYed = Sayed(true)


//str_replace();
/*
$sentense = "Hello World";
echo str_replace('World','Sayed', $sentense);
   >>>>>   output= Hello Sayed
*/

//trim(); remove whitespace from strat and End of sentense 
//ltrim(); rtrim();

//implode(); array convert to string
//explode(); string convert to array


