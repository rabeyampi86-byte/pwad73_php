<?php
$drive = 'd:';

$free = disk_total_space($drive);
echo round($free/1048576/1024, 2);
?>