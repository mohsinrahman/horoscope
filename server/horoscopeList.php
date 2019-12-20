<?php

function getHoroscope($date) {
   // error_log($date);
    $horoscope = array(
        "Fishing" => "03-22-04-19",
        "Good  Profit" => "04-20-05-20",
        "World Tour" => "05-21-06-20",
        "Win lottory" => "06-21-07-22",
        "Hunting" => "07-23-08-22",
        "Good  Opportunities" => "04-23-09-22",
        "Getting Engaged" => "08-23-10-22",
        "Huge break through" => "10-23-11-21", 
        "Getting Merry" => "11-22-12-21",
        "Start New Busniess" => "12-22-01-19",
        "Will have new relation" => "01-20-02-18",
        "Buy Luxery Car" => "02-19-03-20"
    );
    
    

    if(isset($horoscope)){
    foreach($horoscope as $key => $value){
        $explodedValues = explode('-', $value);
        $startMonth = $explodedValues[0];
        $startDay = $explodedValues[1];
        $endMonth = $explodedValues[2];
        $endDay = $explodedValues[3];
        $mydate= explode('-',$date);
        $mydateMonth = $mydate[0];
        $mydateDay = $mydate[1];
        if (strlen($mydateMonth) > 2 || strlen($mydateDay) > 2){
            return "";
        }
        error_log($date);
        error_log($startMonth);
        error_log($startDay);
        error_log($endMonth);
        error_log($endDay);
        
         if($mydateMonth == $startMonth && $mydateDay >= $startDay && $mydateDay <= "30"){
            return $key;
        }
        elseif ($mydateMonth == $endMonth && $mydateDay <= "30"&& $mydateDay <= $endDay){
            return $key;
        }
    }

}
else 
{
    return "";
}


}
   


?>