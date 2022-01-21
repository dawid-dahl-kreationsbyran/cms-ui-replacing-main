<?php

namespace SilverStripe\App;

use DNADesign\Elemental\Models\BaseElement;

class HelloWorldWithExclaimBlock extends BaseElement
{
    private static $singular_name = 'Hello World With Exclaim Block';
    private static $plural_name = 'Hello World With Exclaim Blocks';
    private static $description = 'Displays hello with a variable amount of exclamation marks';
    private static $icon = 'font-icon-block-rocket';
    private static $table_name = 'HelloWorldWithExclaimBlock';
    private static $inline_editable = true;

    private static $db = [
        "NumberOfExclaims" => "Int",
        "ExtraText" => "Varchar(255)"
    ];

    public function renderExclaims()
    {
        return str_repeat("!", $this->NumberOfExclaims);
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        // ...

        return $fields;
    }

    public function getType()
    {
        return 'Hello World With Exclaim';
    }
}
