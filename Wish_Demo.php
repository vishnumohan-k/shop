<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" media="all" href="tablestyle.css" />
</head>
        <body>
        <br><hr>
    <div class="container" >
    <div class="row" >
        <div style="width:100%; margin:0 auto; border: thin solid grey; border-radius: 25px;padding: 20px;">
          <form method="POST" action="Item.php">
            <div class="form-group has-feedback text-center">
              <label id="dis"><h3>Choose Your WishList :</h3></label>   
              <!--<select class="form-control" name="" style="width: 225px;margin-left: 30px;font-size: 16px;display: inline-block; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);font-weight: bold; ">
              <option disabled selected value> -- select an option -- </option>-->
            
            </form>
            <?php
                    echo"<table border='1' align='center' width='100%'>
                                <tr>
 
                                <th><center>Product Name</center></th>
                                <th><center>Price</center></th>
                                <th><center>URL</center></th></tr>";
                                
                    include 'dbconnect.php';
                    session_start();
                    $query="select user_id from user where email = '".$_SESSION['username']."'";
                    session_write_close ();    
                    $rslt=mysqli_query($con,$query);
                    if(! $rslt ) 
                    {
                        die('Could not get data: ' . mysql_error());
                    }     
                    
                    while($row=mysqli_fetch_row($rslt)) 
                    {
                        
                        $user=$row[0];
                    }    
                    $query="select wishlist_id,wishlist_name from wishlist where user_id_wishlist = ".$user."";
                    $rslt=mysqli_query($con,$query);  
                    if(! $rslt ) 
                    {
                        die('Could not get data: ' . mysql_error());
                    }     
                    echo "<select class='form-control' name='' style='width: 225px;margin-left: 30px;font-size: 16px;display: inline-block; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);font-weight: bold; ' autofocus>";
                    echo "<option disabled selected value> -- select an option -- </option>-->";
                    while($row=mysqli_fetch_row($rslt)) 
                    {
                        
                        echo "<option value='";
                        echo $row[0];
                        echo "'>";
                        echo $row[1];
                        echo "</option>";
                    }  
                    $query="select wishlist_id from wishlist where user_id_wishlist = '".$user."'";
                    $rslt=mysqli_query($con,$query);  
                    if(! $rslt ) 
                    {
                        die('Could not get data: ' . mysql_error());
                    }     
                    while($row=mysqli_fetch_row($rslt)) 
                    {
                        $query1="select url_id from Wish_Url where wishlist_id = '".$row[0]."'";
                        $rslt1=mysqli_query($con,$query1);  
                        if(! $rslt1 ) 
                        {
                            die('Could not get data: ' . mysql_error());
                        }     
                   
                        while($row1=mysqli_fetch_row($rslt1)) 
                        { 
                            $query2="select url,title,current_value from URL where url_id = '".$row1[0]."'";
                            $rslt2=mysqli_query($con,$query2);
                            while($row2=mysqli_fetch_array($rslt2))
                            {
                                                                     
                                echo"<tr>";
                                //echo"<td><a href='";echo "Item.php?Url_id=";echo "'>"."<b>".$row2['title']."</b>"."</a></td>";
                                echo"<td><a href='";echo "Item.php?Url_id=";echo $row1[0];echo "'>"."<b>".$row2['title']."</b>"."</a></td>";
                                echo"<td>".$row2['current_value']."</td>";
                                echo"<td><a href='";echo $row2['url'];echo "'>"."<i>Go To Page</i>"."</a></td>";
                                echo "</tr>";
                            }            
                        }

                    }
                    echo "</table>";
            ?>
            </div> 
        </div>
    </div>
    </div>
    </body>
    </head>
</html>
