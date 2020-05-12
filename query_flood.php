<div style=" height: 100%; width: 100%; background-image: url('https://images.pexels.com/photos/311039/pexels-photo-311039.jpeg?cs=srgb&dl=close-up-of-silhouette-against-blue-sky-311039.jpg&fm=jpg');">
        <!-- Search bar -->
        <h1 style=' padding-top: 20%; text-align: center; font-weight: bold;'> Check to see if your parcel is in the flood zone </h1>
        <h3 style='text-align: center'> To search please input your parcel number in quotes. Ex.('123-456-789') </h3>
        <p></p>
        <form style='text-align: center' name="form1" method="post" action="phpproj.php">
            <input name="search" type="text" size="30" maxlength="30" />
            <input name="submit" type="submit" value="Search" />
        </form>
  
<?php       
    // Connecting, selecting database
    $dbconn = pg_connect("host= port= dbname= user= password="")
    or die('Could not connect: ' . pg_last_error());

    //collect
    if(isset($_POST['search'])) {
        $searchq = $_POST['search'];
        // Performing SQL query
        $q='SELECT gid, own1 FROM chester_parcels WHERE "pin_map" = '.$searchq;
        $result = pg_query($q);

        $row = pg_fetch_row($result);
        if($row)
            echo "<h1 style='text-align: center'> Parcel located within Flood Zone, please contact your local planning department for more information </>";
            echo "<h1 style='text-align: center'>GID: $row[0] </h1>";
            echo "<h1 style='text-align: center'>Name: $row[1] </h1>";
       
    }

?>
</div>  
git config --global user.email "you@example.com"
  git config --global user.name "Your Name"