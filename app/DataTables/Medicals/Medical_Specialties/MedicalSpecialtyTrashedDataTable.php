<?php

namespace App\DataTables\Medicals\Medical_Specialties;

use App\Models\Medicals\Medical_Specialties\Medical_Specialty;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class MedicalSpecialtyTrashedDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($specialty) {
                return $specialty->present()->trash_action();
            })
            ->addColumn('status', function ($specialty) {
                return $specialty->present()->status();
            })
            ->rawColumns(['action', 'status']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Medical_Specialty $model): QueryBuilder
    {
        return $model->newQuery()->onlyTrashed();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('medicalspecialtytrashed-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
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
        return 'MedicalSpecialtyTrashed_' . date('YmdHis');
    }
}
