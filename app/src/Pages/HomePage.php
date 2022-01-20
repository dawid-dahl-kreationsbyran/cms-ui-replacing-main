<?php

namespace SilverStripe\App;

use Page;

class HomePage extends Page
{
    private static $icon_class = 'font-icon-p-home';

    private static $table_name = 'HomePage';

    private static $db = [
        'TextContent' => 'Varchar',
        'Extra' => 'Varchar',
        'DropdownContent' => 'Varchar',
    ];
}
