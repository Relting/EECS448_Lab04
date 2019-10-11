<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet"></link>
</head>
<body>

<?php

//need tree, treat, toy quantity and cost to find subtotal. Plus shipping cost and method.
//toy is 3, treat is 5, tree is 50
$trees = intval($_POST["trees"]);
$toys = intval($_POST["toys"]); 
$treats = intval($_POST["treats"]); 

$treesTotal = $trees * 50;
$toysTotal = $toys * 3;
$treatsTotal = $treats * 5;
$shipCost = intval($_POST["shipping"]);

if($shipCost == 0){
$shipMethod = "7-day shipping";
}
if($shipCost == 50){
$shipMethod = "Overnight shipping";
}
if($shipCost == 5){
$shipMethod = "3-day shipping";
}

$fullTotal = $treesTotal + $toysTotal + $treatsTotal + $shipCost;

echo("<h1>Thank you for your purchase, " . $_POST["username"] . "!</h1> <br>");
echo("<h1>Your password is " . $_POST["password"] . ".</h1> <br>");
echo("<br><br><h1> Your receipt: <br><br></h1>");

?>

<table>
<tr>
<th></th>
<th> Quantity </th>
<th> Cost per item </th>
<th> Subtotal </th>
</tr>
<tr>
<th> Cat Trees </th>
<td> <?php echo($trees) ?>  </td>
<td> $50.00 </td>
<td> $<?php echo($treesTotal) ?> </td>
</tr>
<tr>
<th> Cat Toys </th>
<td> <?php echo($toys) ?>  </td>
<td> $3.00 </td>
<td> $<?php echo($toysTotal) ?> </td>
</tr>
<tr>
<th> Cat Treats </th>
<td> <?php echo($treats) ?>  </td>
<td> $5.00 </td>
<td> $<?php echo($treatsTotal) ?> </td>
</tr>
<tr>
<th> Shipping </th>
<td colspan="2"> <?php echo($shipMethod) ?> </td>
<td> $<?php echo($shipCost) ?> </td>
</tr>
<tr>
<th colspan="3"> Total Cost </th>
<th> $<?php echo($fullTotal) ?> </th>
</tr>


</table>
</body>
</html>
