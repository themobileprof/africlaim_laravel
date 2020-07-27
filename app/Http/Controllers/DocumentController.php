<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
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
		//$claims = Claim::select("id")->where('user_id', Auth::id())->get();
		$documents = Document::select(['document', 'path', 'claim_id', 'flight_date' => Claim::select('dof')->whereColumn('claim_id', 'id')->where('user_id', Auth::id())])->get();
		//dd($claimer);
		//$document = Document::where('claim_id', $claims->toArray())->get();

		return view('document-home', ["documents" => $documents]);
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
			$fileName = time() . '_' . $request->document->getClientOriginalName();
			$docPath = $request->file('document')->storeAs('documents', $fileName, 'public');

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
	}
}
