<?php
function anti_injection($sql){
$sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|like|show tables|\’|'\| |=|-|;|,|\|’|<|>|#|\*|–|\\\\)/"), "" ,$sql);

$sql = trim($sql);
$sql = strip_tags($sql);
$sql = (get_magic_quotes_gpc()) ? $sql : addslashes($sql);
return $sql;
}
?>
<?PHP /*
<form enctype="application/x-www-form-urlencoded" method="post" action="<?php $_SERVER['PHP_SELF']?>">
<input type="text" name="name" value="">
<input type="submit" value="submit">
</form>
<?php
$name = anti_injection($_POST['name']);
echo $name
// input: Zak’s and Derick’s Laptop
// output: Zaks and Dericks Laptop

// input: a’;DROP TABLE users; SELECT * FROM data WHERE name LIKE
// output: a users data name
*/
?>