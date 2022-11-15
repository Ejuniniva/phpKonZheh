<?php
//Настройки сайта
$config = array(
  'title' => 'Кондитерский цех', //название сайта
  'vk_url' => 'https://vk.com/milaria_l', //ссылка на владельца сайта
  'db' => array( //данные для подключения к БД
        // 'server' => '10.12.209.150',
        // 'username' => 'root',
        // 'password' => '',
        // 'name' => 'shatohina'
        'server' => 'localhost',
        'username' => 'root',
        'password' => '',
        'name' => 'KondiZheh'
      )
);

//Переменная обращения к БД
$connection = mysqli_connect(
  $config['db']['server'],
  $config['db']['username'],
  $config['db']['password'],
  $config['db']['name']
);

?>
