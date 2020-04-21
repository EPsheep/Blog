## clip

> 将文本写入剪切板

将字符串写入剪切板
```bash
echo HelloMan | clip
```

将dir命令输入到剪切板
```bash
dir | clip
```

将文本文件内容输入到剪切板
```bash
clip < id_rsa.pub
```

清空剪切板
```bash
echo | clip
```

## dir

## explorer

> 打开资源浏览器

在当前目录打开资源管理器
```bash
explorer .
```

## shutdown

> 关闭计算机

指定一个半小时后自动关闭电脑
```bash
shutdown -s -t 5400
```

取消关闭计算机任务
```bash
shutdown -a
```