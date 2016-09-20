<?php
$servername = "153.91.152.245";
$username = "test";
$password = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
} 




$result = mysqli_select_db($conn,'test');
$sql = "SELECT * FROM axk03710_orders";
$result1 = mysqli_query($conn,$sql);
?>

<h2>Order details :</h4>
<table border="1"  style="background:#00ffff;padding : 15px 40px 15px 40px; border-collapse :collapse; width:80%;">
    <tr>
        <th>
            Name
        </th>

         <th>
             Phone
        </th>

         <th>
             Address
        </th>
    </tr>

<?php

while($query_execute = mysqli_fetch_assoc($result1))
{
?>

    <tr>
            <td>
                <?php echo $query_execute['name']; ?>
            </td>


            <td>
                <?php echo $query_execute['phoneno']; ?>
            </td>

            <td>
                <?php echo $query_execute['address']; ?>
            </td>
    </tr>



<?php


}
?>
</table>
<?php

mysqli_close($conn);
?>