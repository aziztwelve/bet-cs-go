<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatchRequest extends FormRequest{
		/**
		 * Determine if the user is authorized to make this request.
		 *
		 * @return bool
		 */
		public function authorize(){
			return true;
		}
	
		/**
		 * Get the validation rules that apply to the request.
		 *
		 * @return array
		 */
		public function rules(){
			return [
				'started_at' => 'required',
				'score_team_first' => 'numeric|integer|min:0',
				'score_team_second' => 'numeric|integer|min:0',
				'bets_amount_team_first' => 'numeric|required|min:0',
				'bets_amount_team_second' => 'numeric|required|min:0',
			];
		}
}
