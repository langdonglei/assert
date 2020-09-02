<?php
var_dump(ini_get("display_errors"));
die;
ini_set("error_reporting", E_ALL);
ini_set("display_errors", 1);


ini_set("zend.assertions", 1);
die;


assert_options(ASSERT_ACTIVE, true);
assert_options(ASSERT_BAIL, true);
assert_options(ASSERT_EXCEPTION, true);
assert_options(ASSERT_QUIET_EVAL, true);
assert_options(ASSERT_WARNING, true);
assert_options(ASSERT_CALLBACK, function () {
    echo "assert callback";
});
ini_set("zend.assertions", 1);
echo "assertions=" . ini_get("zend.assertions") . PHP_EOL;
echo "active=" . ini_get("assert.active") . PHP_EOL;
echo "bail=" . ini_get("assert.bail") . PHP_EOL;
echo "quiet_eval=" . ini_get("assert.quiet_eval") . PHP_EOL;
echo "exception=" . ini_get("assert.exception") . PHP_EOL;
echo "warning=" . ini_get("assert.warning") . PHP_EOL;
echo "callback=" . ini_get("assert.callback") . PHP_EOL;


assert(false);


echo 'end11111111111111';
