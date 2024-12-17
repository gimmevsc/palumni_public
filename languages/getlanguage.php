<?php
$query = "SELECT * FROM languages";
$test = $db->query($query);
$words = array();
$lang_code = "en";
if(!isLocalhost()){
    $userIP = $_SERVER['REMOTE_ADDR'];

    $url = 'http://ip-api.com/json/'.$userIP;
    
    $response = file_get_contents($url);
    
    if ($response === false) {
        // Handle error
        echo "Failed to fetch data from $url";
    } else {
        $languages = json_decode(file_get_contents('./languages/languages.json'))->countries;
        $country = json_decode($response)->country;
        if (property_exists($languages, $country)) {
            $lang_code =  $languages->{$country};
    
            
        } 
    }
    
}


if(!isset($_GET['lang']))$_GET['lang'] = $lang_code;

if (mysqli_num_rows($test) > 0) {
    // Output data of each row
    while($row = $test->fetch_assoc()) {
        if($row[$_GET['lang']]!=""){
            $words[$row['en']] = $row[$_GET['lang']];
        } else{
            $words[$row['en']] = $row['en'];
        }

    }
    
} else {
    echo "0 results";
}


?>