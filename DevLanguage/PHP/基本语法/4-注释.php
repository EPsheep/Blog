
PHP 支持 C，C++ 和 Unix Shell 风格（Perl 风格）的注释

<?php
echo "This is a test"; // This is a one-line c++ style comment
/* This is a multi line comment
   yet another line of comment */
echo "This is yet another test";
echo 'One Final Test'; # This is a one-line shell-style comment
?>


单行注释仅仅注释到行末或者当前的 PHP 代码块，视乎哪个首先出现。

这意味着在 // ... ?> 或者 # ... ?> 之后的 HTML 代码将被显示出来：?> 跳出了 PHP 模式并返回了 HTML 模式

<h1>This is an <?php # echo 'simple';?> example</h1>
<p>The header above will say 'This is an  example'.</p>