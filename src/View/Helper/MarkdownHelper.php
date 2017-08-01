<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

class MarkdownHelper extends Helper
{

    public function initialize(array $config)
    {
        parent::initialize($config); // TODO: Change the autogenerated stub
    }

    public function transform($text) {

        $className = "cebe\\markdown\\Markdown";
        $this->parser = new $className();
        $this->parser->html5 = true;

        return $this->parser->parse($text);
    }
}