--TEST--
Serialization - SerializeAppend
--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("Serialization", "testSerializeAppend");
--EXPECT--
PHP_COUCHBASE_OK