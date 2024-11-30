<?php

namespace hgphuc98\puredashboard;

use Flarum\Extend;

return [
    (new Extend\Frontend('admin'))
        ->css(__DIR__.'/less/admin.less'),
];
