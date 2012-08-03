<?php
	$query;
	
	echo "<html><head><title>Wines</title></head>\n";
	
	function showerror()
	{
		die("Error " . mysql_errno() . " : " . mysql_error());
	}
	
	if(!($dbconn = @mysql_connect('yallara.cs.rmit.edu.au:54418', 'wsuser', 'wdauser')))
	{
		die("Could not connect");
	}
	if(!(@mysql_select_db("winestore", $dbconn)))
	{
		showerror();
	}
	
	if(!($result = @mysql_query($query, $dbconn)))
	{
		showerror();
	}
	
	echo "<body><pre>\n";
	
	while ($row = mysql_fetch_array($result))
	{
		print"\n<tr>\n\t<td>{$row[wine_name"]}</td>".
		"\n\t<td>{$row["year"]}</td>".
		"\n\t<td>{$row["description"]}</td>".
	}
	
	echo "</pre></body></html>";
	
	mysql_close($dbconn);
?>