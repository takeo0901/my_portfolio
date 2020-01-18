<?php
class Topic{
  private $day;
  private $topicTitle;
  private $topicText;

  public function __construct($day,$topicTitle,$topicText){
    $this->day = $day;
    $this->topicTitle = $topicTitle;
    $this->topicText = $topicText;
  }

  public function getDay(){
    return $this->day;
  }
  public function getTopicTitle(){
    return $this->topicTitle;
  }
  public function getTopicText(){
    return $this->topicText;
  }

}

//インスタンス//
  $topic_1 = new Topic('2020.1.20','イベント開催のお知らせ','2020.1.20日より豊田スタジアムにてジビエイベントを開催します。<br>興味のある方は是非お越しくださいませ。');
  $topic_2 = new Topic('2020.2.20','休業のお知らせ','本日2020.2.20ですが、誠に勝手ながら休業とさせて頂きます。ご了承くださいませ。');
  $topic_3 = new Topic('2020.3.20','オンラインショップにて新商品を販売いたしました！','0000様にて鹿角のアクセサリーの販売を開始いたしました！是非お買い求めください。');


  $topics = array($topic_1,$topic_2,$topic_3);



?>
