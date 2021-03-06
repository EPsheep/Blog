## Redis (Remote Dictionary Server)

Redis，即远程字典服务器的缩写. 

Redis是一个高性能键值对的数据库.

Redis以字典结构存储数据，并允许其他应用通过TCP协议读写字典内容.

Redis提供了多种键值数据类型:
- 字符串类型
- 散列类型
- 列表类型
- 集合类型
- 有序集合类型

Redis数据库的所有数据都存储在内存中，因此在性能上对比以硬盘存储的数据库有非常明显的优势.

但数据存储在内存中，无法保障数据无法丢失. 

因此，Redis主要是作为缓存系统和队列系统.

在性能上，相较于同样出名的缓存系统 Memcache (MC)而言:

Redis是单线程模型，而MC支持多线程，所以在多核服务器下，MC的性能会更高一些

Redis约定版本号 (即第一个小数点后的数字) 为偶数的版本是稳定版，为奇数的版本是非稳定版.

### 目录
- [x] 配置与多数据库
- [ ] 数据类型
- [ ] 事务
- [ ] 生存时间
- [ ] 排序
- [ ] 消息通知
- [ ] 管道
- [ ] 节省空间
- [ ] 数据管理-RDB持久化
- [ ] 数据管理-AOF持久化
- [ ] 数据管理-主从复制与读写分离
- [ ] 安全
- [ ] 通信协议
- [ ] MONITOR调试监控

### 参考书籍
- Redis入门指南