PHP code must sit inside specific tags. Which one(s) ?
<br>
&lt; ?php...? &gt;.
<hr>
Which of the following variables do not have a valid name ?
<br>
$_5var
<br>
$hotel4*
<hr>
In which variable is stored the data sent via an html form using the GET method ?
<br>
GET method is stored in the $_GET superglobal array.
<hr>
When submitting a form using the POST method, the variables values appear in the URL. True or False?
<br>
False. When using the POST method in a form, the data is sent in the request body and not in the URL.
<hr>
What is the difference between $a=$b and $a==$b ?
<br>
$a = $b is an assignment operator, which assigns the value of $b to $a.
<br>
$a == $b is a comparison operator, which returns true if $a and $b are equal and false otherwise.
<hr>
What character must be at the end of each line of php code ?
<br>
;
<hr>
What will return this line: echo "Hello" + " World"; ? Why ?
<br>
This line will produce an error because "Hello" and "World" are strings, and using the "+" operator in this context will try to add them as numbers, which is not possible. To concatenate strings in PHP, you should use the "." operator, like this: "echo "Hello" . " World";"
<br>
The correct syntax for printing the string "Hello World" in PHP is:
<br>
&lt;?php echo "Hello World"; ?&gt;.
or
<br>
&lt;?= "Hello World"; ?&gt;. (This is a shorthand for the echo statement)
<hr>
What is the result of this script ? Why ?
<br>
$Hour = 15;
$hour = 3;
echo ($hour == $Hour) ? "yes": "not correct";
<br>
The result of this script would be: "not correct".
<br>
Explanation:
<br>
In this script, two variables are declared: $Hour and $hour. The first one starts with an uppercase letter, and the second one starts with a lowercase letter.
<br>
The ternary operator (? :) checks if $hour is equal to $Hour, which it is not, since the values of the two variables are different. Therefore, the expression returns "not correct".
<br>
Case sensitivity matters in PHP, so $hour and $Hour are considered two different variables.
<hr>
What is the correct way to write comments in PHP ?
<br>
// This is a comment 
/* This is a comment */ 
# This is a comment
<hr>
What is the result of this script ? Why ?
<br>
The result of this script would be: "yes"
<br>
Explanation:
<br>
In this script, two variables are declared: $Hour and $hour. The first one starts with an uppercase letter, and the second one starts with a lowercase letter.
<br>
The ternary operator (? :) checks if $hour is equal to $hour, which it is, so the expression returns "yes".
<br>
Case sensitivity matters in PHP, so $hour and $Hour are considered two different variables.
<hr>
What is the name of this type of operator in the following example ?
echo ( $season == 'summer' ) ? "Go to the beach.": "Go skying.";
<br>
The operator in this example is a ternary operator.
<hr>
If the condition in the previous statement is true, we will "Go to the beach."
<br>
$a = 10;: This sets the variable $a to an integer value of 10.
<br>
$a = "10";: This sets the variable $a to a string value of "10".
<br>
$a = array(10);: This sets the variable $a to an array with one element, which is an integer value of 10.
<hr>
What will the following return ?
<br>
$a = 10;  
$b = 2;  
echo $a + $b;  
<br>
2
<hr>
And this one ?
$a = 10;  
$b = 2;  
echo $a * $b;
<br>
20
<hr>
And this one ?
$a = 10;  
$b = 2;  
echo $a - $b;
<br>
8
<hr>
And this one ? Why ?
$a = 10;  
$b = 2;  
echo $a . $b; 
<br>
The following will return "102".
<br>
Explanation:
<br>
In this script, the variables $a and $b are declared and assigned values of 10 and 2, respectively. The echo statement concatenates the values of $a and $b using the concatenation operator (.), resulting in a string value of "102".
<hr>
What will this script return at 10h23 AM ?
$hour = date('H');
if ($hour > 17){
	echo "Good evening!";
} elseif ($hour > 13){
	echo "Good afternoon!";
} else{
	echo "Hello!";
}
<br>
Hello
<br>
... And what will it return at 15h02 AM ?
<br>
Good afternoon
<hr>
Assume $a = 4. What instruction will return : 4 = four ? Why ?
<br>
echo '$a = four';
echo '$a = 2+2';
echo "$a = four";
<br>
Explanation:
<br>
The first echo statement '$a = four' will output the string literal '$a = four' as it is.
<br>
The second echo statement '$a = 2+2' will output the string literal '$a = 2+2' as it is.
<br>
The third echo statement "$a = four" will output the string '4 = four', where the value of the variable $a is replaced with its assigned value of 4. Within double quotes ("), variables are replaced with their values.
<hr>
In the case of a form to collect sensitive data, which method will we rather use to send the data :
<br>
GET
mailto
POST
<hr>
In the case of a form to collect sensitive data, it is recommended to use the POST method.
<br>
Explanation:
<br>
The GET method appends the form data to the URL, making it visible in the browser's address bar. This is not secure for sensitive information such as passwords, credit card numbers, or other personal information.
<br>
The mailto method sends the form data as an email message, which may not be secure as email is often transmitted unencrypted over the internet.
<br>
The POST method sends the form data in the body of the HTTP request, where it is not visible in the URL or the browser's address bar. This is the recommended method for sending sensitive information as it is more secure than the GET method. Additionally, the POST method is not limited by the length of the URL like the GET method is.