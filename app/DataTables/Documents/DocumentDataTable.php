<?php

namespace App\DataTables\Documents;


use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use App\Models\Documents\Document;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class DocumentDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($education) {
                return $education->present()->action();
            })
            ->addColumn('status', function ($education) {
                return $education->present()->status();
            })
            ->rawColumns(['action', 'status']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Document $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('document-table')
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
                    ->action("window.location = '" . route('document.trashed') . "';"),
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
            Column::make(__('code')),
            Column::make(__('name')),
            Column::make(__('note')),
            Column::make(__('status')),
            Column::computed(__('action'))
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
        return 'Document_' . date('YmdHis');
    }
}
