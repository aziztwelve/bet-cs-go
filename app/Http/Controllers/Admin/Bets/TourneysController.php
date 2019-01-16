<?php

namespace App\Http\Controllers\Admin\Bets;

use App\Http\Requests\TourneyRequest;
use App\Models\Bets\Tourney;
use App\Http\Controllers\Controller;
use Image;

/**
 * Class TourneysController
 * @package App\Http\Controllers\Admin\Bets
 */
class TourneysController extends Controller{


	/**
	 * Show the application admin tourneys.
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function getTourney(){
//		$tourneys = Tourney::with('mainTourney')->get();
		$tourneys = Tourney::all();
		return view('admin.bets.tourneys_view', ['tourneys'=>$tourneys]);
	}


	/**
	 * Show the application admin add tourney.
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function addGetTourney(){
		return view('admin.bets.add_tourney');
	}


	/**
	 * add new Team
	 * @param TourneyRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function addPostTourney(TourneyRequest $request){
		$tourney_add = new Tourney();

		$tourney_add->id_main_tourney = $request->get('id_main_tourney');
		$tourney_add->id_game = $request->get('id_game');
		$tourney_add->name = $request->get('name');
		$tourney_add->description = $request->get('description');
		$tourney_add->location = $request->get('location');
		$tourney_add->format = $request->get('format');
		$tourney_add->fund = $request->get('fund');
		$tourney_add->code_status = $request->get('code_status');
		$tourney_add->started_at = $request->get('started_at');
		$tourney_add->finished_at = $request->get('finished_at');
		
		//save our image
		if ($request->hasFile('logo')) {
			
			//Get file name with the extension
			$image = $request->file('logo');
			$filenameWithExt = $image->getClientOriginalName();
			//Get just file name
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			//Get just ext
			$extension = $request->file('logo')->getClientOriginalExtension();
			//Filename to store
			$fileNameToStore = $filename.'_'.time().'.'.$extension;
			//Upload image
			$location = 'images/tourneys/'.$fileNameToStore;
			Image::make($image)->resize(150, 150)->save($location);
			$tourney_add->logo = $fileNameToStore;
		}
		$tourney_add->save();
		
		return redirect('admin/tourneys')->with('success', 'Турнир добавлен');
	}
	
	
	/**
	 * getting tourney
	 *
	 * @return mixed
	 */
	public function getEditTourney($id){
		$tourney = Tourney::find($id);
		
		return view('admin.bets.edit_tourney', ['tourney'=>$tourney]);
	}
	
	
	/**
	 * edit tourney
	 *
	 * @param TourneyRequest $request
	 * @param $id
	 *
	 * @return mixed
	 */
	public function postEditTourney(TourneyRequest $request, $id){
		
		$tourney_edit = Tourney::find($request->id);
		
		$tourney_edit->id_main_tourney = $request->get('id_main_tourney');
		$tourney_edit->id_game = $request->get('id_game');
		$tourney_edit->name = $request->get('name');
		$tourney_edit->description = $request->get('description');
		$tourney_edit->location = $request->get('location');
		$tourney_edit->format = $request->get('format');
		$tourney_edit->fund = $request->get('fund');
		$tourney_edit->code_status = $request->get('code_status');
		$tourney_edit->started_at = $request->get('started_at');
		$tourney_edit->finished_at = $request->get('finished_at');
		
		//save our image
		if ($request->hasFile('logo')) {
			
			//Get file name with the extension
			$image = $request->file('logo');
			$filenameWithExt = $image->getClientOriginalName();
			//Get just file name
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			//Get just ext
			$extension = $request->file('logo')->getClientOriginalExtension();
			//Filename to store
			$fileNameToStore = $filename.'_'.time().'.'.$extension;
			//Upload image
			$location = 'images/tourneys/'.$fileNameToStore;
			Image::make($image)->resize(150, 150)->save($location);
			$tourney_edit->logo = $fileNameToStore;
		}
		
		
		$tourney_edit->save();
		
		return redirect('admin/tourneys')->with('success', 'Турнир  изменен');
	}
	
	
	/**
	 * delete tourney
	 *
	 * @param $id
	 *
	 * @return mixed
	 */
	public function deleteTourney($id){
		$delete = Tourney::whereId($id)->firstOrFail();
		$delete->delete();
		
		return redirect('admin/tourneys')->with('success', 'Турнир  удален');
	}
}
