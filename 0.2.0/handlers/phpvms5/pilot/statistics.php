<?php
$pilotStatistics = $database->fetch('SELECT totalhours, totalflights FROM ' . dbPrefix . 'pilots WHERE pilotid=?', array($pilotID));
$pirepStatistics = $database->fetch('SELECT landingRate FROM ' . dbPrefix . 'pireps WHERE pilotid=? and accepted = 1', array($pilotID));
$pilotStatistics = $pilotStatistics[0];
$totalLandingRate = 0;
if($pirepStatistics !== array())
{
    foreach($pirepStatistics as $pirep)
    {
        $totalLandingRate += $pirep['landingRate'];
    }
}
echo(json_encode(array(
    'hoursFlown' => $pilotStatistics['totalhours'],
    'flightsFlown' => $pilotStatistics['totalflights'],
    'averageLandingRate' => round($totalLandingRate/count($pirepStatistics) > 0 ? count($pirepStatistics) : 1),
    'pirepsFiled' => count($pirepStatistics),
)));
?>