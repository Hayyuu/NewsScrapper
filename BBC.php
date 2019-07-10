<?php
require_once "phpwebdriver\WebDriver.php";?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mycss.css">
<title>BBC
</title>
</head>
<header>
<nav><table id="table1">
<tr>
<td><a href="new.php">HOME</a></td>
<td><a href="#.php">BBC</a></td>
<td><a href="Eth.php">ETHIOPIA</a></td>
<td><a href="about.php">ABOUT</a></td>
</tr>
</table></nav>
</header>
<body>
<?php
$host='localhost';
$port=5555;
$webdriver=new WebDriver($host,$port);
$webdriver->connect("chrome");
$webdriver->get("https://www.bbc.com/news");
$titles=$webdriver->findElementsBy(LocatorStrategy::className,"gs-c-promo-body gel-1/2@xs gel-1/1@m gs-u-mt@m");
foreach ($titles as $value) {
        $ty=$value->findElementBy(LocatorStrategy::tagName,"p");
       ?>
    <div id="eachElement">
            <a><p><?php echo $ty; ?></p></a><?php
    


}
?>

</div>
            
</body>
</html>