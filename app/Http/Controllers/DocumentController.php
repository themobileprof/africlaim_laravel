<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Claim;
use App\Eligibility;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$claims = Claim::where('user_id', Auth::id())->get();
		//$documents = Document::select(['document', 'path', 'claim_id', 'flight_date' => Claim::select('dof')->whereColumn('claim_id', 'id')->where('user_id', Auth::id())])->get();
		//Claim::select('flight_id')->where('user_id', Auth::id())->lists('id')->toArray();

		$claim_col = array_column($claims->toArray(), 'id');
		$documents = Document::where('claim_id', $claim_col)->get();

		//dd($documents);

		return view('document-home', ["documents" => $documents, 'claims' => $claims]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create($claim)
	{
		// Check if this Claim is Eligible before proceeding
		$eligible = Eligibility::where('claim_id', $claim)->first();
		//dd($eligible);
		if ($eligible === null) {
			return ("This Claim is not available");
		} else {
			if ($eligible->eligible != 1) {
				return ("This Claim is not eligible for this Step");
			}
		}

		// Get Claim details
		$claim_detail = Claim::find($claim);

		return view('document', ["claim" => $claim_detail]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
		$request->validate([
			'document' => 'required|mimes:pdf,doc,docx|max:2048',
		]);

		if ($request->file('document')->isValid()) {
			//
			$fileName = $request->document_type . '_' . Auth::id() . "_" . time() . "." . $request->document->getClientOriginalExtension();
			$docPath = $request->file('document')->storeAs('documents', $fileName, 'public');

			//$docPath = Storage::putFileAs(
			//'documents',
			//$request->file('document'),
			//$fileName
			//);
			//Storage::setVisibility($fileName, 'public');

			//Update record with document details
			//dd($request->claim);
			$document = Document::updateOrCreate(
				['claim_id' => $request->claim, 'document' => $request->document_type],
				['path' => $docPath]
			);
		}


		return redirect('/document');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Document  $document
	 * @return \Illuminate\Http\Response
	 */
	public function show(Document $document)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Document  $document
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Document $document)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Document  $document
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Document $document)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Document  $document
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Document $document)
	{
		//
		Document::destroy($document->id);

		unlink('storage/' . $document->path);

		return redirect('/document');
	}
}
