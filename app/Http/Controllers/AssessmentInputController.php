<?php
namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;

class AssessmentInputController extends Controller {
	public function index()
	{
	/*	$perspectives = DB::table('perspectives')->get();
		$relations = DB::table('relations')->get();
		$assessments = DB::table('assessments')->get();
		$comments = DB::table('comments')->get();
		$configurations = DB::table('configurations')->get();

		return view('perspectives.assessment_inp')->with('perspectives',$perspectives);
		return view('relations.assessment_inp')->with('relations',$relations);
		return view('assessments.assessment_inp')->with('assessments',$assessments);
		return view('comments.assessment_inp')->with('comments',$comments);
		return view('configurations.assessment_inp')->with('configurations',$configurations);
	 */
		return view('assessment_inp');
	}
}
