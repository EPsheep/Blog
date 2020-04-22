
凡是在一对开始和结束标记之外的内容都会被 PHP 解析器忽略

要输出大段文本时，跳出 PHP 解析模式通常比将文本通过 echo 或 print 输出更有效率。

<?php $me = 'eps'; echo $me; ?> is writing php code.

可以在 PHP 中使用四对不同的开始和结束标记

其中两种，<?php ?> 和 <script language="php"> </script> 总是可用的。

另两种是短标记和 ASP 风格标记，可以在 php.ini 配置文件中打开或关闭

尽管有些人觉得短标记和 ASP 风格标记很方便，但移植性较差，通常不推荐使用。

1. <?php echo $me; ?>

2. <script language="php"> echo $me; </script>

3. <? echo $me; ?>

3.1 <?= $me; ?>

4. <% echo $me; %>

4.1 <%= $me; %>

其中示例 1 中是最常用，并建议使用的。

自 PHP 5.4 起，短格式的 echo 标记 < ? = 总会被识别并且合法，而不管 short_open_tag 的设置是什么。