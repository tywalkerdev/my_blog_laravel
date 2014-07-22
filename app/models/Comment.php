<?php 
	
	Class Comment Extends Eloquent 
	{
		public function entry()
		{
			return $this->belongsTo('Entry');
		}	
	}
