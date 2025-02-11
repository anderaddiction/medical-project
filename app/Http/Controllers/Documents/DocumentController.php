<?php

namespace App\Http\Controllers\Documents;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Documents\Document;
use App\Http\Controllers\Controller;
use App\DataTables\Documents\DocumentDataTable;
use App\DataTables\Documents\DocumentTrashedDataTable;
use App\Http\Requests\Documents\DocumentRequest;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DocumentDataTable $dataTable)
    {
        return $dataTable->render('auth.documents.documents.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $document = new Document();
        return view('auth.documents.documents.create', ['document' => $document]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocumentRequest $request)
    {
        $document = Document::create(
            $request->validated()
                +   ['code' => uniqueCode(8, 'number')]
                +   ['slug' => Str::slug($request->name)]
                +   ['note' => $request->note ? null : 'N/A']
        );

        return redirect()->route('document.create')->with('success', __('Document created successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        return view('auth.documents.documents.show', [
            'document' => $document
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('auth.documents.documents.edit', [
            'document' => $document
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DocumentRequest $request, Document $document)
    {
        $document->update(
            $request->validated()
                +   ['slug' => Str::slug($request->name)]
                +   ['note' => $request->note ? '' : 'N/A']
        );

        return redirect()->route('document.edit', ['document' => $document])->with('success', __('Document updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->delete();

        return redirect()->route('document.index')->with('success', __('Document deleted successfully'));
    }

    /**
     * Display a listing resource from trash.
     */
    public function trashed(DocumentTrashedDataTable $dataTable)
    {
        return $dataTable->render('auth.documents.documents.trashed');
    }

    /**
     * Restore the specified resource from trash.
     */
    public function restore($id)
    {
        $document = Document::withTrashed()->find($id);
        $document->restore();

        return redirect()->route('document.trashed')->with('success', 'Document restored successfully');
    }
}
