<?php

require_once __DIR__ . '/smarty-config.php';

$smarty->display(__FILE__);

__HALT_COMPILER();
?><h1>test 1:<h1>
{'99'|test_modifier}

<h1>test 2:<h1>
{translate lang="br"}Hello, world!{/translate}

