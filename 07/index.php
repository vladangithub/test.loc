<?php
error_reporting(-1);

/*$str = '<p>Hello 1</p>';
$str = "<p>Hello 2</p>";

echo "<p>Hello 1</p>\n";
echo "<p>Hello \\2</p>";
echo PHP_EOL;
echo "<p>Hello 3</p>\n";*/

$str3 = "Lorem ipsum dolor sit \"amet\", consectetur 'adipisicing elit'. Accusantium dignissimos quasi sunt. Animi cum deserunt dolor dolore, eos facilis fugiat inventore ipsam laboriosam necessitatibus quasi repellat sint, suscipit velit voluptatum.";

$name = "Bobba";

$str4 = <<<"HEREDOC"
<div>
Hello $name <br>
Lorem ipsum dolor sit "amet", consectetur 'adipisicing elit'. Accusantium dignissimos quasi sunt. Animi cum deserunt dolor dolore, eos facilis fugiat inventore ipsam laboriosam necessitatibus quasi repellat sint, suscipit velit voluptatum.

Пример использования слеша \\ и
</div>

HEREDOC;

$str5 = <<<'NOWDOC'
<div>
Hello $name <br>
Lorem ipsum dolor sit "amet", consectetur 'adipisicing elit'. Accusantium dignissimos quasi sunt. Animi cum deserunt dolor dolore, eos facilis fugiat inventore ipsam laboriosam necessitatibus quasi repellat sint, suscipit velit voluptatum.

Пример использования слеша \\ и
</div>

NOWDOC;
echo $str4;
echo $str5;

var_dump(123); // int(123)

var_dump((string)123); // string(3) "123"

var_dump((string)true); // string(1) "1"

var_dump((string)false); // string(0) ""


























