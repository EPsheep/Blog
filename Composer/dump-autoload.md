## dump-autoload

> 某些情况下你需要更新 autoloader，例如在你的包中加入了一个新的类。你可以使用 dump-autoload 来完成，而不必执行 install 或 update 命令。

## 安装-参数

- __--optimize-autoloader (-o)__ : 转换 PSR-0/4 autoloading 到 classmap 可以获得更快的加载支持。生产环境下建议，运行需要时间，因此并非默认值。
- __--no-dev__ : 跳过安装require-dev列出的包。