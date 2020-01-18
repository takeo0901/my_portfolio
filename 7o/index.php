<?php
 require_once('7o/topic/');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shishimori</title>
    <link rel="stylesheet" href="topic.css">

    <style>
		a {
			text-decoration: none ;
		}
	  </style>
  </head>

  <body>
    <div class="header">
      <a href="#">TOP</a>
      <a href="#">三州 しし森社中とは</a>
      <a href="#">プロフィール</a>
      <a href="#">ギャラリー</a>
      <a href="#">ショップ</a>
      <a href="#">お問い合わせ</a>
    </div>

    <h1>お知らせ</h1>
    <div class="topics">
      <?php foreach($topics as $topic): ?>
       <div class="topic-block">
         <div class="topic-top">
           <p class="top-day"><?php echo $topic->getDay() ?></p>
           <p class="top-title"><?php echo $topic->getTopicTitle() ?></p>
         </div>
         <div class="topic-bottom">
           <p class="bottom-text"><?php echo $topic->getTopicText() ?></p>
         </div>
       </div>
      <?php endforeach ?>

    </div>

  </body>
