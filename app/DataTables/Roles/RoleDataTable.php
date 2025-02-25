<?php

namespace App\DataTables\Roles;


use App\Models\Roles\Role;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class RoleDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($role) {
                return $role->present()->action();
            })
            ->addColumn('status', function ($role) {
                return $role->present()->status();
            })
            ->rawColumns(['action', 'status']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Role $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('role-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make(__('create'))
                    ->text('<i class="fa fa-edit" title="' . __('Create') . '"></i>'),
                Button::make('')
                    ->text('<i class="fa fa-trash" title="' . __('Trash') . '"></i>')
                    ->addClass('btn btn-delete-all')
                    ->action("window.location = '" . route('role.trashed') . "';"),
                Button::make(__('excel'))
                    ->text('<i class="fa fa-file-excel" title="' . __('Excel') . '"></i>'),
                Button::make(__('csv'))
                    ->text('<i class="fa fa-file-csv" title="' . __('CSV') . '"></i>'),
                Button::make(__('pdf'))
                    ->text('<i class="fa fa-file-pdf" title="' . __('PDF') . '"></i>'),
                Button::make(__('print'))
                    ->text('<i class="fa fa-print" title="' . __('Print') . '"></i>'),
                Button::make(__('reset'))
                    ->text('<i class="fa fa-redo" title="' . __('Reset') . '"></i>'),

            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('code'),
            Column::make('name'),
            Column::make('display_name'),
            Column::make('note'),
            Column::make('status'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Role_' . date('YmdHis');
    }
}
