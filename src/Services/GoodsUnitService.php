<?php

namespace Uupt\Erp\Services;

use Uupt\Erp\Models\GoodsUnit;
use Slowlyo\OwlAdmin\Services\AdminService;

/**
 * 计量单位
 *
 * @method GoodsUnit getModel()
 * @method GoodsUnit|\Illuminate\Database\Query\Builder query()
 */
class GoodsUnitService extends AdminService
{
    protected string $modelName = GoodsUnit::class;
}
