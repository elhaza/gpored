<?php
function mysort($list)
{
    do {
        $continue = false;
        for ($i = 0, $c = count($list) - 1; $i < $c; $i++) {
            if ($list[$i] > $list[$i + 1]) {
                list($list[$i + 1], $list[$i]) =
                    array($list[$i], $list[$i + 1]);
                $continue = true;
            }
        }
    } while ($continue);
    return $list;
}
$list = array(90, 5, 8, 9, 4, 2, 1, 10, 55, 68, 74, 42, 41, 45, 67);
mysort($list);

foreach($list as $elem){
	echo $elem;
}