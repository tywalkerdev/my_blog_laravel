<?php 
	
	Class Entry Extends Eloquent 
	{
		public function comments()
		{ 		
			return $this->hasMany('Comment');
		 }
 	}