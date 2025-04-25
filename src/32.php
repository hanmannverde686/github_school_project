<?php
// 配置文件路径
$config = "path/to/config.php";

// 初始化配置对象
$cfg = new \Config\Config($config);

// 读取配置文件内容
$data = $cfg->load('test');

// 输出数据
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>
