# Basic Language Features
## Statements
All statements in PHP must be terminated with a semicolon. An exception to this is if the statement happens to be the 
last statement before a closing tag.

This will work ([example](./statements-closing-tag.php)):
```PHP
<?php
echo 'Hello';
echo 'World'
?>
```

But this won't ([example](./statements-no-closing-tag.php)):
```PHP
<?php
echo 'Hello';
echo 'World'
```

## Whitespaces
Whitespace has no semantic meaning in PHP, so there is no need to line code up except for improved code readability.
Although there is no need for whitespaces, you can't insert whitespaces in function names, variable names, or keywords.

[Example:](./same-line-statements.php)
```PHP
// You can have multiple statements in the same line
echo'Hello';echo' World!';
```

## Codeblocks
Code blocks are denoted by the brace symbols { }. You literally create a block for no reason.

[Example:](./codeblocks.php)
```PHP
{
    echo'Hello';
}
echo' World!';
```


## Case Sensitivity
PHP construct and function names are not case-sensitive, but variable and constant names are.

This will work ([example](case-sentivity-works.php)):
```PHP
function printHelloWorld(): void {
    ECHO 'Hello World!';
}

PRINTHELLOWORLD();
```
This won't ([example](case-sentivity-fails.php)):
```PHP
$variable = "Hello World";
echo $VARIABLE;
```