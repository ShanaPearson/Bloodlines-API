<?php

 class SlBloodlines {


  public function getMember($race, $memberId)
  {
  	$this->$race = $race;
  	$this->$memberId = $memberId;

    $url= "https://".$race.".slbloodlines.com/members/".$memberId;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
  	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  	$result = curl_exec($curl);
    return $result;
    curl_close($curl);
  }


  public function getFamily($race, $memberId)
  {
  	
  }


 }