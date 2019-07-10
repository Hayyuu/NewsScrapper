<?php
require_once "phpwebdriver\WebDriver.php";?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mycss.css">
<title>USA Today
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
$webdriver->get("https://www.usatoday.com/");
$titles=$webdriver->findElementsBy(LocatorStrategy::className,"hfwmm-secondary-hed-wrap hfwmm-secondary-text-hed-wrap");
foreach ($titles as $value) {
        $ty=$value->findElementBy(LocatorStrategy::className,"js-asset-headline hfwmm-list-hed hfwmm-secondary-hed placeholder-hide ")->getAttribute("innerHTML");
       ?>
            <a><p><?php echo $ty; ?></p></a>
            <hr><?php
    


}
?>

</div>
            
</body>
</html>