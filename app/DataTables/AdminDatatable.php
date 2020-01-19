<?php

namespace App\DataTables;

use App\Admin;
//use Yajra\DataTables\Html\Button;
//use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
//use Yajra\DataTables\Html\Editor\Fields;
//use Yajra\DataTables\Html\Editor\Editor;

class AdminDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('checkbox', 'admin.admins.btn.checkbox')
            ->addColumn('edit', 'admin.admins.btn.edit')
            ->addColumn('delete', 'admin.admins.btn.delete')
            ->rawColumns([
                'edit',
                'delete',
                'checkbox'
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\AdminDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(AdminDatatable $model)
    {
        return Admin::query();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->addAction(['width' => '80px'])
                    //->parameters($this->getBuilderParameters());
                    ->parameters([
                        'dom'        => 'Blfrtip',
                        'lengthMenu' => [[10, 25, 50, 100], [10, 25, 50, trans('admin.all_record')]],
                        'buttons'    =>[
                            ['text'     => '<i class="fa fa-trash"></i> '.trans('admin.delete_admin'), 'className'     => 'btn btn-danger delBtn'],
                            ['text'     => '<i class="fa fa-plus"></i> '.trans('admin.create_admin'), 'className'     => 'btn btn-danger',
                             "action" => "function(){
                                window.location.href = '".\URL::current()."/create';
                            }"],
                            ['extend'   => 'print', 'className'   => 'btn btn-primary', 'text'   => '<i class="fa fa-print"></i>'],
                            ['extend'   => 'csv', 'className'   => 'btn btn-info', 'text'   => '<i class="fas fa-file-csv"></i> '.trans('admin.ex_csv')],
                            ['extend'   => 'excel', 'className'   => 'btn btn-success', 'text'   => '<i class="fa fa-file-excel-o"></i> '.trans('admin.ex_excel')],
                            ['extend'   => 'reload', 'className'   => 'btn btn-warning', 'text'   => '<i class="fa fa-refresh"></i>'],
        

                        ],
                        
				'initComplete' => " function () {
		            this.api().columns([2,3]).every(function () {
		                var column = this;
		                var input = document.createElement(\"input\");
		                $(input).appendTo($(column.footer()).empty())
		                .on('keyup', function () {
		                    column.search($(this).val(), false, false, true).draw();
		                });
		            });
		        }",

                    
                    
                    
                    
                    ]);
}   /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
			[
				'name'  => 'checkbox',
				'data'  => 'checkbox',
                'title' => '<input type="checkbox" class="check_all" onclick="check_all()" />',
                'exportable' => false,
				'printable'  => false,
				'orderable'  => false,
				'searchable' => false,
			],[
				'name'  => 'id',
				'data'  => 'id',
				'title' => 'ID',
			], [
				'name'  => 'name',
				'data'  => 'name',
				'title' => 'Admin Name',
			], [
				'name'  => 'email',
				'data'  => 'email',
				'title' => 'Admin Email',
			], [
				'name'  => 'created_at',
				'data'  => 'created_at',
				'title' => 'created at',
			], [
				'name'  => 'updated_at',
				'data'  => 'updated_at',
				'title' => 'updated at',
			], [
				'name'       => 'edit',
				'data'       => 'edit',
				'title'      => 'Edit',
				'exportable' => false,
				'printable'  => false,
				'orderable'  => false,
				'searchable' => false,
			], [
				'name'       => 'delete',
				'data'       => 'delete',
				'title'      => 'Delete',
				'exportable' => false,
				'printable'  => false,
				'orderable'  => false,
				'searchable' => false,
			],
		];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Admin_' . date('YmdHis');
    }
}
