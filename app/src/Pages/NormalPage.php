<?php

namespace SilverStripe\App;

use Page;
use SilverStripe\Forms\TextField;
use DawidDahl\TextDropdownField\TextDropdownField;

class NormalPage extends Page
{
    private static $icon_class = 'font-icon-p-home';

    private static $table_name = 'NormalPage';

    private static $db = [
        'TextContent' => 'Varchar',
        'Extra' => 'Varchar',
        'DropdownContent' => 'Varchar',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $source = [
            'p' => 'Paragraph',
            'h1' => 'Header 1',
            'h2' => 'Header 2',
        ];

        $fields->addFieldToTab(
            'Root.Main',
            TextDropdownField::create(
                'SillyOldName',
                'TitleUsersSee',
                'TextContent',
                'DropdownContent',
                $source
            )
        );


        $fields->addFieldToTab("Root.Main", TextField::create("Extra", "Super kind of extra"));

        return $fields;
    }
}
