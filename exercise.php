<?php
require("linear.php");
if(linear_search($array, $search_num) == false)
{
  echo $search_num . "は見つかりませんでした";
}
else
{
  echo $search_num . "が" . $i . "番目に見つかりました";
}