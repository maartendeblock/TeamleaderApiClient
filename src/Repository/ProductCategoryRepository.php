<?php

namespace Nascom\TeamleaderApiClient\Repository;

use Nascom\TeamleaderApiClient\Model\ProductCategory\ProductCategoryListView;
use Nascom\TeamleaderApiClient\Request\Products\ProductCategories\ProductCategoriesListRequest;

/**
 * Class ProductCategoryRepository
 * @package Nascom\TeamleaderApiClient\Repository
 */
class ProductCategoryRepository extends RepositoryBase
{
    /**
     * @return ProductCategoryListView[]
     * @throws \Http\Client\Exception
     */
    public function listProductCategories()
    {
        return $this->handleRequest
        (
            new ProductCategoriesListRequest(),
            ProductCategoryListView::class.'[]'
        );
    }
}