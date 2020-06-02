<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="js/popper.min.js">
    <link rel="stylesheet" href="jquery/jquery.min.js">
    <title>Covin-19 Live Tracker</title>

    <style>
    *{
        margin:0px;
        padding:0px;
    }
  
    h1{
        font-size:35px;
    }
    p{
        text-align:justify;
    }
    </style>
</head>
<body>
    <!-- start navbar section -->
    

<!---header part---->


<div class="col-lg-4 col-md-4 col-12 mt-4">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="image/corona-2.png" alt="" class="img-fluid" width="90" height="90">
                  </figure>
                </div>
              </div> 
                <div class="col-lg-4 col-md-4 col-12">
                  <p>Images of the new coronavirus. Coronavirus from SARS</p>
                </div>
           
          </div>
       </div>



    <!-- End navbar section -->
    <div class="container text-center">
      <h1>Covin-19 Live Update Tracker</h1>
      <p>Coronavirus (Covid-19) tracker gives you a breakdown of COVID-19 cases, deaths, and recoveries across states and countries that are most affected.
      </p>
      <img class="img-responsive" src="image/corona-2.png" alt="First slide" style="width:80%;">
     
      <p>This tracker provides the number of confirmed cases and deaths from novel coronavirus by country, the trend in confirmed case and death counts by country, and a global map showing which countries have confirmed cases and deaths. The data are drawn from the Johns Hopkins University (JHU) Coronavirus Resource Center’s COVID-19 Map and the World Health Organization’s (WHO) Coronavirus Disease (COVID-2019) situation reports.</p>
    </div>

<div class="container">
    <table class="table table-border tab_value">
        <tr>
         <thead>
           <th>Country</th>
           <th>Total Confirmed</th>
           <th>Total Recovered</th>
           <th>Total Deaths</th>
           <th>New Recovered</th>
           <th>New Deaths</th>
         </thead>
        </tr>
    </table>
</div>


<?php 

$data=file_get_contents('https://api.covid19api.com/summary');

$coronaLive=json_decode($data);
echo "<pre>";
print_r($coronaLive);
echo "</pre>";


// echo count($coronaLive['statewise']);
//  echo $coronaLive['statewise'][1]['state'];
?>


</body>
</html>