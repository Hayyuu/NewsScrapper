<?php
require_once "phpwebdriver\WebDriver.php";?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mycss.css">
<title>CNN
</title>
</head>
<header>
<nav><table id="table1">
<tr>
<td><a href="usa.php">USA Today</a></td>
<td><a href="new.php">BBC</a></td>
<td><a href="Eth.php">CNN</a></td>
<td><a href="about.php">ABOUT</a></td>
</tr>
</table></nav>
</header>
<body>
<div id="eachElement">
<?php
$host='localhost';
$port=5555;
$webdriver=new WebDriver($host,$port);
$webdriver->connect("chrome");
$webdriver->get("https://edition.cnn.com/");
$titles=$webdriver->findElementsBy(LocatorStrategy::tagName,"li");
foreach ($titles as $value) {
    $ts=$value->findElementsBy(LocatorStrategy::className,"cd__headline");
    foreach ($ts as $t) {
    	$str=$t->findElementBy(LocatorStrategy::tagName,"span")->findElementBy(LocatorStrategy::tagName,"strong")->getAttribute("innerHTML");?>
    	
		<a><p><?php echo $str; ?></p></a>
		<hr>
		<?php
    	
}

}
?>

</div>
            
</body>
</html>