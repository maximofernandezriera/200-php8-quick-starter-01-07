PHP 8 Quick Scripting Reference - Source Code. 01  to 07

<?php

// *** Chapter 01 - Using PHP ***

?>
 
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo "Hello World"; ?>
  </body>
</html>
 
<?php

  // single-line comment
  #  single-line comment
  /* multi-line 
     comment */
 
// *** Chapter 02 - Variables ***
 
$myVar;
$myVar = 10;
echo $myVar; // "10"

$myVar = 1;   // int type
$myVar = 1.5; // float type

// Float type evaluated as string type 
echo $myVar; // "1.5"

$myInt = 1234; // decimal number
$myInt = 0b10; // binary number (2 decimal)
$myInt = 0123; // octal number (83 decimal)
$myInt = 0x1A; // hexadecimal number (26 decimal)

$myFloat = 1.234;
$myFloat = 3e2; // 3*10^2 = 300

$myBool = true;
$myNull = null; // variable is set to null

$myInt = $myNull + 0;      // numeric context (0)
$myBool = $myNull == true; // bool context (false)
echo $myNull;              // string context ("")
//echo $myUndefined;         // error (as of PHP 8)

// *** Chapter 03 - Operators ***

// Arithmetic operators
$x = 4 + 2; // 6 // addition
$x = 4 - 2; // 2 // subtraction
$x = 4 * 2; // 8 // multiplication
$x = 4 / 2; // 2 // division
$x = 4 % 2; // 0 // modulus (division remainder)
$x = 4 ** 2; // 16 // exponentiation

// Combined assignment operators
$x = 1;
$x += 5; // $x = $x+5;
$x -= 5; // $x = $x-5;
$x *= 5; // $x = $x*5; 
$x /= 5; // $x = $x/5;
$x %= 5; // $x = $x%5;
$x **= 5; // $x = $x**5;

// Increment and decrement operators
$x++; // $x += 1;
$x--; // $x -= 1;

$x++; // post-increment
$x--; // post-decrement
++$x; // pre-increment
--$x; // pre-decrement

$x = 5; $y = $x++; // $x=6, $y=5
$x = 5; $y = ++$x; // $x=6, $y=6

// Comparison operators
$x = (2 == 3);  // equal to (false)
$x = (2 != 3);  // not equal to (true)
$x = (2 <> 3);  // not equal to (alternative)
$x = (2 === 3); // identical (false) 
$x = (2 !== 3); // not identical (true)
$x = (2 > 3);   // false,greater than (false)
$x = (2 < 3);   // less than (true)
$x = (2 >= 3);  // greater than or equal to (false)
$x = (2 <= 3);  // less than or equal to (true)

$x = (1 ==  "1"); // true (same value)
$x = (1 === "1"); // false (different types)

$x = 1 <=> 1; // 0 (1 == 1)
$x = 3 <=> 2; // 1 (3 > 2)
$x = 1 <=> 2; // -1 (1 < 2)

// Logical operators
$x = (true && false); // logical and (false)
$x = (true || false); // logical or (true)
$x = !true;           // logical not (false)

// Bitwise operators
$x = 5 & 4;  // 101 & 100 = 100 (4) // and
$x = 5 | 4;  // 101 | 100 = 101 (5) // or
$x = 5 ^ 4;  // 101 ^ 100 = 001 (1) // xor (exclusive or)
$x = 4 << 1; // 100 << 1  =1000 (8) // left shift
$x = 4 >> 1; // 100 >> 1  =  10 (2) // right shift
$x = ~4;     // ~00000100 = 11111011 (-5) // invert

$x=5; $x &= 4;  // 101 & 100 = 100 (4) // and
$x=5; $x |= 4;  // 101 | 100 = 101 (5) // or
$x=5; $x ^= 4;  // 101 ^ 100 = 001 (1) // xor
$x=5; $x <<= 1; // 101 << 1  =1010 (10)// left shift
$x=5; $x >>= 1; // 101 >> 1  =  10 (2) // right shift

$x = 0b101 & 0b100; // 0b100 (4)

// Additional logical operators
// Same as: $x = (true && false);
$x = true && false; // $x is false (0)

// Same as: ($x = true) and false;
$x = true and false; // $x is true (1)

$x = (true xor true); // false
 
// *** Chapter 04 - String ***
 
$a = 'Hello';

$b = $a . ' World'; // Hello World
$a .= ' World';     // Hello World

$c = 'World';
echo "Hello $c"; // "Hello World"
echo 'Hello $c'; // "Hello $c"

$s = <<<LABEL
Heredoc string (with parsing)
Goodbye
LABEL;

$name = 'John';
$s = <<<LABEL
Hello $name
LABEL;
echo $s; // "Hello John"

$s = <<<'LABEL'
Nowdoc string (without parsing)
LABEL;

$s = "Hello\nWorld";
echo "Hello<br>World";
$s = 'It\'s'; // "It's"

echo "\u{00C2A9}"; // © (copyright sign)
echo "\u{C2A9}";   // ©

$s = 'Hello';
$s[0] = 'J';
echo $s; // "Jello"

$s[strlen($s)-1] = 'y';
echo $s; // "Jelly"

$a = 'test';
$b = 'test';
$c = ($a === $b); // true

// String Functions
$a = 'String';

// Search and replace characters in a string
$b = str_replace('i', 'o', $a); // Strong

// Insert text at specified position
$b = substr_replace($a, 'My ', 0, 0); // My String

// Get part of string specified by start and length
$b = substr($a, 0, 3); // Str

// Convert to uppercase
$b = strtoupper($a); // STRING

// Find position of the first occurance of a substring
$i = strpos($a, 'i'); // 3 (starts at 0)

// Get string length
$i = strlen($a); // 6
 
// *** Chapter 05 - Arrays ***
 
// Numeric arrays
$a = array(1,2,3);
$a = [1,2,3];

$a[0] = 1;
$a[1] = 2;
$a[2] = 3;

$a[3] = 4;
$a[] = 5; // $a[4]

echo "$a[0] $a[1] $a[2] $a[3]"; // "1 2 3 4"
 
// Associative arrays
$b = array('one' => 'a', 'two' => 'b', 'three' => 'c');

$b['one'] = 'a';
$b['two'] = 'b';
$b['three'] = 'c';

echo $b['one'] . $b['two'] . $b['three']; // "abc" 

$c = array(0 => 0, 1 => 1, 2 => 2);
$e = array(5 => 5, 6);
 
// Mixed arrays
$d = array(0 => 1, 'foo' => 'bar');
echo $d[0] . $d['foo']; // "1bar"
 
// Multi-dimensional arrays
$a = array(array('00', '01'), array('10', '11'));

$a[0][0] = '00';
$a[0][1] = '01';
$a[1][0] = '10';
$a[1][1] = '11';

echo $a[0][0] . $a[0][1] . $a[1][0] . $a[1][1];

$b = array('one' => array('00', '01'));
echo $b['one'][0] . $b['one'][1]; // "0001"

$c[][][][] = "0000"; // four dimensions
 
// *** Chapter 06 - Conditionals ***
 
// If statement
$x = 1;
// ...
if ($x == 1) { 
  echo 'x is 1'; 
}
elseif ($x == 2) { 
  echo 'x is 2'; 
}
else { 
  echo 'x is something else'; 
}

if ($x == 1) 
  echo 'x is 1'; 
elseif ($x == 2) 
  echo 'x is 2';
else 
  echo 'x is something else';

switch ($x)
{
  case 1: echo 'x is 1'; break;
  case 2: echo 'x is 2'; break;
  default: echo 'x is something else';
}

if ($x == 1):     echo 'x is 1';  
elseif ($x == 2): echo 'x is 2';
else:             echo 'x is something else';
endif;

switch ($x):
  case 1:  echo 'x is 1'; break;
  case 2:  echo 'x is 2';  break;
  default: echo 'x is something else';
endswitch;

?>

<?php if ($x == 1) { ?>
  This will show if $x is 1.
<?php } else { ?>
  Otherwise this will show.
<?php } ?>

<?php if ($x == 1): ?>
  This will show if $x is 1.
<?php else: ?>
  Otherwise this will show.
<?php endif; ?>
<?php

// Ternary operator expression
$y = ($x == 1) ? 1 : 2;

// Ternary operator statement
($x == 1) ? $y = 1 : $y = 2;

// Match expression
$output = match($x) {
    1 => 'True',
    2 => 'False',
    default => 'Unknown'
};
echo $output;

match($x) {
  1 => $output = 'True',
  2 => $output = 'False',
  default => $output = 'Unknown'
};
echo $output;

$x = '1'; // string type
switch ($x)
{
  case 1: $output = 'integer'; break;
  case '1': $output = 'string';
}
echo $output; // "integer"

$output = match($x) {
  1 => 'integer',
  '1' => 'string',
};
echo $output; // "string"

// *** Chapter 07 - Loops ***
 
// While loop
$i = 0;
while ($i < 10) { echo $i++; } // 0-9

// Do-while loop
$i = 0;
do { echo $i++; } while ($i < 10); // 0-9

// For loop
for ($i = 0; $i < 10; $i++) { echo $i; } // 0-9

$i = 0;
for (;$i < 10;) { echo $i++; }

for ($i = 0, $x = 9; $i < 10; $i++, $x--) {
  echo $x; // 9-0
}

$a = array(1,2,3);

for($i = 0; $i < sizeof($a); $i++) {
  echo $a[$i]; // "123"
}

// Foreach loop
foreach ($a as $v) { 
  echo $v; // "123"
}

$a = array('one' => 1, 'two' => 2);

foreach ($a as $k => $v) {
  echo "$k = $v "; // "one = 1 two = 2 "
}

// Alternative syntax
$i = 0;
while ($i < 10): echo $i++; endwhile;

for ($i = 0; $i < 10; $i++): echo $i; endfor;

$a = array(1,2,3);
foreach ($a as $v): echo $v; endforeach;

// Break
for ($i = 0; $i < 5; $i++) 
{ 
  if ($i == 3) break; // end loop
  echo $i; // "012"
}

$i = 0;
while ($i++ < 10) 
{
  for (;;) { break 2; } // end for and while
}

// Continue
for ($i = 0; $i < 5; $i++) 
{
  if ($i == 2) continue; // start next iteration
  echo $i; // "0134"
} 

$i = 0;
while ($i++ < 10) 
{
  for (;;) { continue 2; } // start next while iteration
}

$i = 0;
while ($i++ < 10) 
{
  switch ($i) 
  {
    case 1: continue 2; // start next while iteration
  }
}

// Goto
goto myLabel; // jump to label
myLabel:      // label declaration

loop:
while ($finished === false)
{
  // Ö
  if ($try_again) goto loop; // restart loop
}

?>
