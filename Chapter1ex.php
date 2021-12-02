<?php

print "This";
print "Will";
print "Be";
print "One";
print "Word";

echo "<hr/>";

print "This ";
print "Will ";
print " <strong> Be </strong> ";
print " <p> Many </p>";
print "Words";
print " <p> And </p>";
print " <i> Lines </i>";


echo "<hr/>";

echo "This";
echo "Will";
echo "Be";
echo "One";
echo "Word";

echo "<hr/>";
//OR

echo "This", "Will", "Be", "One", "Word";


echo"This";
echo "Will ";
echo " <strong> Be </strong> ";
echo " <p> Many </p>";
echo "Words";
echo " <p> And </p>";
echo " <i> Lines </i>";

echo "<hr/>";
//OR

echo "This ", "Will "," <strong> Be </strong>  ", " <p> Many </p>", "Words"," <p> And </p>","  <i> Lines </i>";

echo "<hr/>";

$n1 = $_GET ['n1'];
$n2 = $_GET  ['n2'];
print 'The value of '.
'n1 is';
echo $n1;
echo "<br/>";
print 'The value of '.
'n2 is ';
echo $n2;

?>

<form method ="get">
    <input type="text" name="n1"" />
    <input type="text" name="n2" />
    <input type= "submit" name="submit" />
</form>

<?php

echo "<hr/>";

$n1 = $_POST ['n1'];
$n2 = $_POST ['n2'];
print 'The value of '.
'n1 is';
echo $n1;
echo "<br/>";
print 'The value of '.
'n2 is ';
echo $n2;

?>

<form method ="post">
    <input type="text" name="n1" />
    <input type="text" name="n2" />
    <input type= "submit" name="submit" />
</form>

<?php

echo "<hr/>";

$var="boo-hoo";
var_dupm($var);

?>

//This is a single line comment

#This is also a single line comment

/*
 *This is 
 *A multiline
 *Comment
*/

