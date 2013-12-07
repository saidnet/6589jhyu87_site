<?php 
echo 'crypt : <br />';
echo crypt('wideteam');
echo "<br />";
echo 'md5 : <br />';
echo md5('wideteam');
echo "<br />";
echo md5(uniqid(rand(), true));
echo "<br />";
echo md5(uniqid(rand(), true));
echo "<br />";
echo md5(uniqid(rand(), true));
echo "<br />";
echo 'rand() : <br />';
echo uniqid(rand(), true);
echo "<br />";
echo uniqid(rand(), true);
echo "<br />";
echo uniqid(rand(), true);
echo "<br />";
echo 'md5 (2): <br />';
echo md5('wideteamwideteam');
echo "<br />";
echo md5('w');
echo "<br />";
?>