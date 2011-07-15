<?php

namespace Markdown\Tests;

use Markdown\Parser;

class EscapingTest extends \PHPUnit_Framework_TestCase
{
    protected $parser;

    public function setUp()
    {
        $this->parser = new Parser(TRUE);
    }

    public function testHtmlEscaping()
    {
        $text = '<a>a tag injection</a>';
        $html = '<p>&lt;a&gt;a tag injection&lt;/a&gt;</p>'."\n";

        $this->assertSame($html, $this->parser->transform($text));
    }

    public function testScriptEscaping()
    {
        $text = '<script>alert("haha");</script>';
        $html = '<p>&lt;script&gt;alert("haha");&lt;/script&gt;</p>'."\n";

        $this->assertSame($html, $this->parser->transform($text));
    }
}