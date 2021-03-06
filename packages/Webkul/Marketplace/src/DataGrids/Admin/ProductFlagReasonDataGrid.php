<?php

namespace Webkul\Marketplace\DataGrids\Admin;

use DB;
use Webkul\Ui\DataGrid\DataGrid;

/**
 * Seller Data Grid class
 *
 * @author Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class ProductFlagReasonDataGrid extends DataGrid
{
    /**
     *
     * @var integer
     */
    public $index = 'id';

    protected $sortOrder = 'desc'; //asc or desc

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('marketplace_product_flag_reasons')

                ->select('marketplace_product_flag_reasons.id', 'marketplace_product_flag_reasons.reason', 'marketplace_product_flag_reasons.status');

        $this->addFilter('reason', 'marketplace_product_flag_reasons.reason' );
        $this->addFilter('reason', 'marketplace_product_flag_reasons.status' );
        $this->addFilter('id', 'marketplace_product_flag_reasons.id');
        $this->addFilter('created_at', 'marketplace_product_flag_reasons.created_at');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index' => 'id',
            'label' => trans('marketplace::app.admin.sellers.id'),
            'type' => 'number',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'reason',
            'label' => trans('marketplace::app.admin.products.flag.reason'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true,
            'closure' => true,
        ]);

        $this->addColumn([
            'index' => 'status',
            'label' => trans('marketplace::app.admin.products.flag.status'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);

    }

    public function prepareActions()
    {
        $this->addAction([
            'type' => 'Delete',
            'method' => 'POST',
            'route' => 'marketplace.admin.product.flag.reason.delete',
            'confirm_text' => trans('ui::app.datagrid.massaction.delete'),
            'icon' => 'icon trash-icon'
        ]);

        $this->addAction([
            'type' => 'Edit',
            'method' => 'GET',
            'route' => 'marketplace.admin.product.flag.reason.edit',
            'icon'   => 'icon pencil-lg-icon'
        ]);
    }

    public function prepareMassActions()
    {
        $this->addMassAction([
            'type' => 'delete',
            'label' => trans('marketplace::app.admin.sellers.delete'),
            'action' => route('marketplace.admin.product.flag.reason.mass-delete'),
            'method' => 'POST'
        ]);

        // $this->addMassAction([
        //     'type' => 'update',
        //     'label' => trans('marketplace::app.admin.sellers.update'),
        //     'action' => route('admin.marketplace.sellers.massupdate'),
        //     'method' => 'PUT',
        //     'options' => [
        //         trans('marketplace::app.admin.sellers.approve') => 1,
        //         trans('marketplace::app.admin.sellers.unapprove') => 0
        //     ]
        // ]);
    }
}