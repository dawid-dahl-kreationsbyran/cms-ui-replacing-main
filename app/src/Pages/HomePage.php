<?php

namespace SilverStripe\App;

use DawidDahl\TextDropdownField\TextDropdownField;
use Page;
use SilverStripe\Forms\TextField;

class HomePage extends Page
{
    private static $icon_class = 'font-icon-p-home';

    private static $table_name = 'HomePage';

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
