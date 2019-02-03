<?php

Class Model_Weather Extends Model_Base {
	
	public $id;
	public $temp_now;
	public $temp_max;
	public $temp_min;
	public $wind_speed;
	public $city;
	public $date;
	public $weather_today;
	
	public function fieldsTable(){
		return array(
			'id' => 'Id',
			'temp_now' => 'temp_now',
			'temp_max' => 'temp_max',
			'temp_min' => 'temp_min',
			'wind_speed' => 'wind_speed',
			'city' => 'city',
			'date' => 'date',
			'weather_today' => 'weather_today'
		);
	}
	
}