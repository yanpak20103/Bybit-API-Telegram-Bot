<?php
require "config.php";

$sql = "
CREATE TABLE IF NOT EXISTS candles (
 id INT AUTO_INCREMENT PRIMARY KEY,
 open_time DATETIME,
 open_price DECIMAL(18,8),
 high_price DECIMAL(18,8),
 low_price DECIMAL(18,8),
 close_price DECIMAL(18,8),
 volume DECIMAL(18,8)
);";

$pdo->exec($sql);

echo "Таблица создана";
