<?php 
include_once('./dbConnect.inc.php');
//connect with database
$sqlCountry="select * from cities
             order by city_name asc ";
$resCountry=mysqli_query($con,$sqlCountry);
$checkCountry=mysqli_fetch_array($resCountry);
print_r($checkCountry);
// fetch all country

 
// Execute the query.
 
// $query = mysqli_query($con, $sqlCountry);
// while($result = mysqli_fetch_array($query))
// {
//   print_r($result);
// }
 
// Close the connection
mysqli_close($con);

?>