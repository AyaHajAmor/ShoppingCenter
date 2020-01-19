<?php
namespace App\DataTables;
use App\User;
use Yajra\DataTables\Services\DataTable;
class UsersDatatable extends DataTable {
	/**
	 * Build DataTable class.
	 *
	 * @param mixed $query Results from query() method.
	 * @return \Yajra\DataTables\DataTableAbstract
	 */
	public function dataTable($query) {
		return datatables($query)
			->addColumn('checkbox', 'admin.users.btn.checkbox')
			->addColumn('edit', 'admin.users.btn.edit')
			->addColumn('delete', 'admin.users.btn.delete')
			->addColumn('level', 'admin.users.btn.level')
			->rawColumns([
				'edit',
				'delete',
				'checkbox',
				'level',
			]);
	}
	/**
	 * Get query source of dataTable.
	 *
	 * @param \App\User $model
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function query() {
		return User::query()->where(function ($q) {
				if (request()->has('level')) {
					return $q->where('level', request('level'));
				}
			});
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
                            ['text'     => '<i class="fa fa-trash"></i> '.'Delete User', 'className'     => 'btn btn-danger delBtn'],
                            ['text'     => '<i class="fa fa-plus"></i> '.'Create User', 'className'     => 'btn btn-danger',
                             "action" => "function(){
                                window.location.href = '".\URL::current()."/create';
                            }"],
                            ['extend'   => 'print', 'className'   => 'btn btn-primary', 'text'   => '<i class="fa fa-print"></i>'],
                            ['extend'   => 'csv', 'className'   => 'btn btn-info', 'text'   => '<i class="fas fa-file-csv"></i> '.'CSV'],
                            ['extend'   => 'excel', 'className'   => 'btn btn-success', 'text'   => '<i class="fa fa-file-excel-o"></i> '.'Excel'],
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
} 
	/**
	 * Get columns.
	 *
	 * @return array
	 */
	protected function getColumns() {
		return [
			[
				'name'       => 'checkbox',
				'data'       => 'checkbox',
				'title'      => '<input type="checkbox" class="check_all" onclick="check_all()" />',
				'exportable' => false,
				'printable'  => false,
				'orderable'  => false,
				'searchable' => false,
			], [
				'name'  => 'id',
				'data'  => 'id',
				'title' => '#',
			], [
				'name'  => 'name',
				'data'  => 'name',
				'title' => 'Name ',
			], [
				'name'  => 'email',
				'data'  => 'email',
				'title' => 'Email',
			], [
				'name'  => 'level',
				'data'  => 'level',
				'title' => 'Level',
			], [
				'name'  => 'created_at',
				'data'  => 'created_at',
				'title' => 'Created At',
			], [
				'name'  => 'updated_at',
				'data'  => 'updated_at',
				'title' => 'Updated At',
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
	protected function filename() {
		return 'Users_'.date('YmdHis');
	}
}