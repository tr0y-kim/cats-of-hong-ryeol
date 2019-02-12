<html>
<body>
<meta charset='utf-8'/>

<h2> hint 1 : you need to read /workspace/cats-of-hong-ryeol/flag.php</h2><br>
<h2> hint 2 : j1sup.phps ㄱ</h2> <br>
	
&lt;cats &gt;<br>
    &lt;paw &gt;말랑말랑&lt;/paw &gt;<br>
    &lt;fur&gt;부들부들&lt;/fur&gt;<br>
&lt;/cats&gt;

<br><br><br><br>


<?php 
    libxml_disable_entity_loader(false); 
    $xml = file_get_contents('php://input'); 
    $dom = new DOMDocument(); 
    $dom->loadXML($xml, LIBXML_NOENT | LIBXML_DTDLOAD); 
    $cats = simplexml_import_dom($dom); 
    $paw = $cats->paw; 
    $fur = $cats->fur; 
	echo "여기에 인-젝트를 해보실??? <br>";
    echo "<h1>홍렬이 형 고양이털은 ($paw) ???? </h1>";
?> 
	
	
	
</body>
</html>