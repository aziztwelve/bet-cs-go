<?php

namespace App\Http\Controllers\Admin\Bets;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bets\Team;
use App\Models\Setting\Country;
use App\Http\Requests\TeamRequest;
use Image;

/**
 * Class TeamsController
 * @package App\Http\Controllers\Admin\Bets
 */
class TeamsController extends Controller{
		
	
		  /**
		 * Show the application admin teams.
		 *
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function getTeam(){
			$teams = Team::with('country')->get();
			return view('admin.bets.teams_view', ['teams'=>$teams]);
		}
	
	
	/**
	 * Show the application admin add team.
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function addGetTeam(){
			$countries = Country::all();
			return view('admin.bets.add_team', ['countries'=>$countries]);
		}
	
	
	/**
	 * add new Team
	 * @param TeamRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function addPostTeam(TeamRequest $request){
			$team_add = new Team();
	
			$team_add->name = $request->get('name');
			$team_add->id_country = $request->get('id_country');
			$team_add->date_foundation = $request->get('date_foundation');
			$team_add->site = $request->get('site');
			$team_add->description = $request->get('description');
			$team_add->amount_prize = $request->get('amount_prize');
	
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
				$location = 'images/teams/'.$fileNameToStore;
				Image::make($image)->resize(150, 150)->save($location);
				$team_add->logo = $fileNameToStore;
			}
			$team_add->save();
	
			return redirect('admin/teams')->with('success', 'Команда добавлена');
		}
	
	
		 /**
		 * getting team
		 *
		 * @return mixed
		 */
		public function getEditTeam($id){
			$team = Team::find($id);
			$country = Team::find($id)->country;
			$countries = Country::all();
	
			return view('admin.bets.edit_team', ['team'=>$team,  'country'=>$country, 'countries'=>$countries]);
		}
	
	
		/**
		 * edit team
		 *
		 * @param $id
		 *
		 * @return mixed
		 */
		public function postEditTeam(Request $request, $id){
	
			$team_edit = Team::find($request->id);
			if($team_edit->logo == !null) {
	
				$this->validate(request(), [
					'name' => 'required|max:255|',
				]);
			}else{
				$this->validate(request(), [
					'name' => 'required|max:255|',
					'logo' => 'required|image|max:5500|mimes:jpg,png,svg'
				]);
			}
			$team_edit->name = $request->get('name');
			$team_edit->id_country = $request->get('id_country');
			$team_edit->date_foundation = $request->get('date_foundation');
			$team_edit->site = $request->get('site');
			$team_edit->description = $request->get('description');
			$team_edit->amount_prize = $request->get('amount_prize');
			$team_edit->code_status = $request->get('code_status');
	
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
				$location = 'images/teams/'.$fileNameToStore;
				Image::make($image)->resize(150, 150)->save($location);
				$team_edit->logo = $fileNameToStore;
			}
			$team_edit->save();
	
			return redirect('admin/teams')->with('success', 'Команда изменена');
		}
	
	
		 /**
		 * delete team
		 *
		 * @param $id
		 *
		 * @return mixed
		 */
		public function deleteTeam($id){
			$delete = Team::whereId($id)->firstOrFail();
			$delete->delete();
	
			return redirect('admin/teams')->with('success', 'Команда удалена');
		}

}
