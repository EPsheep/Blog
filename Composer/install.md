## install

> composer依赖安装

## 安装-参数

- __--prefer-source__ : 表示composer将尽可能从开发版本获取。
- __--prefer-dist__ : 表示composer将尽可能从稳定版本获取。
- __--dry-run__ : 演示检查安装，而不是实际进行安装。
- __--dev__ : 安装require-dev列出的包（默认值）。
- __--no-dev__ : 跳过安装require-dev列出的包。
- __--optimize-autoloader (-o)__ : 转换 PSR-0/4 autoloading 到 classmap 可以获得更快的加载支持。生产环境下建议，运行需要时间，因此并非默认值。
