<?php
use Glib\GObject\ParamSpec as GParamSpec;

$type = new Glib\GObject\Type;
$type->name = 'test';
$type->parent = 'GObject';
$type->properties[] = GParamSpec::string ('string', GParamSpec::READABLE|GParamSpec::WRITABLE);
$type->properties[] = GParamSpec::boolean('boolean', GParamSpec::READABLE|GParamSpec::WRITABLE);
$type->properties[] = GParamSpec::long   ('long',   GParamSpec::READABLE|GParamSpec::WRITABLE);
$type->properties[] = GParamSpec::double ('double', GParamSpec::READABLE|GParamSpec::WRITABLE);
$type->properties[] = GParamSpec::int    ('int',    GParamSpec::READABLE|GParamSpec::WRITABLE);
$type->properties[] = GParamSpec::float  ('float', GParamSpec::READABLE|GParamSpec::WRITABLE);
$type->properties[] = GParamSpec::char   ('char',   GParamSpec::READABLE|GParamSpec::WRITABLE);
$type->properties[] = GParamSpec::uchar  ('uchar',  GParamSpec::READABLE|GParamSpec::WRITABLE);
$type->properties[] = GParamSpec::uint   ('uint',   GParamSpec::READABLE|GParamSpec::WRITABLE);
$type->generate();


$obj = new test;
$obj->string = 'test';
$obj->boolean = true;
$obj->long = 0xfeedbabefeedbabe;
$obj->double = -0.1234567890;
$obj->int = 0xfeedbabefeedbabe;
$obj->float = -0.1234567890;
$obj->char = 1000;
$obj->uchar = 1000;
$obj->uint = 0xfeedbabefeedbabe;

echo "uint:    "; var_dump($obj->uint);
echo "uchar:   "; var_dump($obj->uchar);
echo "char:    "; var_dump($obj->char);
echo "float:   "; var_dump($obj->float);
echo "int:     "; var_dump($obj->int);
echo "double:  "; var_dump($obj->double);
echo "long:    "; var_dump($obj->long);
echo "boolean: "; var_dump($obj->boolean);
echo "string:  "; var_dump($obj->string);
