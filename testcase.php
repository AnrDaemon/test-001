<?php

require_once __DIR__ . '/smarty-config.php';

$smarty->display(__FILE__);

__HALT_COMPILER();
?>PHP: {$smarty.const.PHP_VERSION}
Smarty: {$smarty.version}
{include "templates/insert-VkVerify.smarty"}
{include "templates/insert-GTags.smarty" inline}
