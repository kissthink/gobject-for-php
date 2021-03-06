--TEST--
Test generation of classes with signals and accumulator
--SKIPIF--
<?php if (!extension_loaded("gobject")) print "skip"; ?>
--FILE--
<?php
$accu = function(&$result, $reply) {
    $result += $reply;
};

$s1 = new GObject\Signal(0, array(), 'glong', null, $accu);

$type = new GObject\Type;
$type->name = 'test';
$type->parent = 'GObject';
$type->signals['something1'] = $s1;
$type->generate();

$obj = new test;
$obj->signal_connect('something1', function($self) {
    return 1;
});

$obj->signal_connect('something1', function($self) {
    return 2;
});

$obj->signal_connect('something1', function($self) {
    return 3;
});

$result = $obj->emit('something1');

var_dump($result === 6);
?>
==DONE==
--EXPECT--
bool(true)
==DONE==
