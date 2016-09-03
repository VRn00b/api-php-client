<?php

namespace SimaLand\API\Entities;

use SimaLand\API\AbstractList;

/**
 * Сущность категория.
 */
class CategoryList extends AbstractList
{
    /**
     * @inheritdoc
     */
    public function getEntity()
    {
        return 'category';
    }
}
