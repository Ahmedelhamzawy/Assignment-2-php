<?php
///////////////////question 1
$arrNames = ['ahmed', 'mohamed', 'abdelrahman','khaled','youssef'];
$maxLength = 0;
$maxValue;
foreach($arrNames as $index => $value) 
{
    if (strlen($value) > $maxLength)
    {
        $maxLength = strlen($value);
        $maxValue = $value;
    }
}
echo '<h1>question1</h1> <br> longest name in this array <br>';
print_r($arrNames);
echo '<br> is '.$maxValue.'<br>';


////////////////question 2
$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo '<br><h1>question 2</h1>'.' unset peter from this array reset<br>';
print_r($people);
echo '<br>';
unset($people[0]);
print_r($people);
echo '<br>';
echo reset($people);


////////////////question 3
$salaries = [1900.32,2000,3200.45,5000.5,6000];
echo '<h1>question 3</h1> <br>this is the salaries array before formatting <br>';
print_r($salaries);
foreach($salaries as $index => $value)
{
    if(is_float($value))
    {
        $salaries[$index] = round($value);
    }
}
echo '<br> this is salaries array after formatting <br>';
print_r($salaries);


////////////////question 4
$characters = '!&%{}/@=><[]?;:0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
echo "<h1>question 4</h1> <br>this is the characters for password <br> $characters <br>";

$charactersLength = strlen($characters);
$password='';
for($i=0;$i<$charactersLength;$i++)
{
   $password .= $characters[rand(0,$charactersLength-1)];
}
echo "this is the password $password <br>";

////////////////question 5
$colorsArr = ['red','green','yellow','blue','violet','black','white'];
$shuffledArr = [];
echo '<h1>question 5</h1><br>this is the array before shuffling<br>';
print_r($colorsArr);
foreach($colorsArr as $index => $value)
{
    $i = 1;
    while($i!=0)
    {
        $c=0;
        $randomColor = $colorsArr[rand(0,count($colorsArr)-1)]; 
          foreach($shuffledArr as $index2 => $value2)
     {
           if($randomColor==$value2)
           {
              $c++;
           }
     }
     if($c==0)
     {
         $i=0;
         $shuffledArr[$index]=$randomColor;
     }
       
    }
}
echo '<br>this is the array after shuffling<br>';
print_r($shuffledArr);
echo '<br>refresh to shuffle again';

////////////////question 6
$int = 20075935;
$count = 0;
while($int!=0)
{
    $int = round($int/10);
    ++$count;
}
echo "<br> <h1>question 6</h1> <br> this integer has $count digits";


////////////question 7
 echo '<br><h1>question 7</h1>' ;
$names = ['ahmed', 'mohammed', 'hasan'];
////////////question 8
$instructors = [
    'kareem fouad' => [
        'job' => 'backend developer',
        'track' => 'php',
    ],
    'ahmed bahnasy' => [
        'job' => 'frontend developer',
        'track' => 'angular',
    ],
    'ahmed nasr' => [
        'job' => 'backend developer',
        'track' => '.net',
    ],
];

?>
<html>
    <head>
    </head>
    <body>
       
        <ul>
            <?php foreach($names as $value) {?>
                <li><?= $value ?></li>
                <?php } ?>
        </ul>
        <ul>
            <h1>question 8</h1>
            <?php $keys = array_keys($instructors)  ?>
            <?php for($i=0;$i<count($instructors);$i++) {?>
                <li><?= $keys[$i] ?></li>
                <ul>
                    <?php foreach($instructors[$keys[$i]] as $key => $value) { ?>
                        <li><?php echo "$key : $value" ?> </li>
                        <?php } ?>
                        
                </ul>
                <?php } ?>
        </ul>
    </body>
</html>