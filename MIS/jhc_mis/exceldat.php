<?php	
$connect = mysql_connect("localhost","root","");
if (!$connect)   {
  die('Could not connect: ' . mysql_error());
  }

$d=$_GET["q"];




mysql_select_db("mis", $connect);	
$filename = "jhc_date_callog";         //File Name
$file_ending = "xls";
	
	
//$sql = "Select * from info_tab";
$sql = "SELECT * FROM info_tab WHERE Date = '".$d."' order by Call_log_DateTim asc ";
$result = mysql_query($sql);
	
 
	
//header info for browser
	
header("Content-Type: application/xls");
	
header("Content-Disposition: attachment; filename=$filename.xls");
	
header("Pragma: no-cache");
	
header("Expires: 0");
	
 
	
/*******Start of Formatting for Excel*******/
	
//define separator (defines columns in excel & tabs in word)
	
$sep = "\t"; //tabbed character
	
	
//start of printing column names as names of MySQL fields
	
for ($i = 0; $i < mysql_num_fields($result); $i++) {
	
echo mysql_field_name($result,$i) . "\t";
	
}
	
print("\n");
	
//end of printing column names
	
 
	
//start while loop to get data
	
    while($row = mysql_fetch_row($result))
	
    {	
        $schema_insert = "";
	
        for($j=0; $j<mysql_num_fields($result);$j++)
	
        {
	
            if(!isset($row[$j]))
	
                $schema_insert .= "NULL".$sep;
	
            elseif ($row[$j] != "")
	
                $schema_insert .= "$row[$j]".$sep;
	
            else
	
                $schema_insert .= "".$sep;
	
        }
	
        $schema_insert = str_replace($sep."$", "", $schema_insert);
	
 $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
	
        $schema_insert .= "\t";
	
        print(trim($schema_insert));
	
        print "\n";
	
    }
	
?>