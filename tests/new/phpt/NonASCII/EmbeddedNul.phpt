--TEST--
NonASCII - EmbeddedNul
--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("NonASCII", "testEmbeddedNul");
--EXPECT--
PHP_COUCHBASE_OK