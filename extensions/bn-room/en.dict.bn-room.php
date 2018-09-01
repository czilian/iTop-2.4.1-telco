<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
	'Class:Room' => 'Area',
	'Class:Room+' => 'Area at a location',
	'Class:Room/Attribute:name' => 'Area label',
	'Class:Room/Attribute:name+' => 'Area label',
	'Class:Room/Attribute:location_id' => 'Location',
	'Class:Room/Attribute:location_id+' => 'Area at Location',
	'Class:Room/Attribute:physicaldevice_list' => 'List of Devices',
	'Class:Room/Attribute:person_list' => 'List of Persons',
	'Class:Room/Attribute:status' => 'Status',
	'Class:Room/Attribute:status+' => 'Status',
	'Class:Room/Attribute:status/Value:active' => 'Active',
	'Class:Room/Attribute:status/Value:active+' => 'Active',
	'Class:Room/Attribute:status/Value:inactive' => 'Inactive',
	'Class:Room/Attribute:status/Value:inactive+' => 'Inactive',
//	'Class:Location/Attribute:status'  =>  'Status',
	'Class:Location/Attribute:room_list' => 'Area',
	'Class:Location/Attribute:room_list+' => 'Area',
	'Class:Person/Attribute:room_id' => 'Area',
	'Class:Person/Attribute:room_id+' => 'Area at Location',
	'Class:PhysicalDevice/Attribute:room_id' => 'Area',
	'Class:PhysicalDevice/Attribute:room_id+' => 'Area at Location',
	'Class:Rack/Attribute:room_id' => 'Area',
	'Class:Rack/Attribute:room_id+' => 'Area at Location',
	'Class:Server/Attribute:room_id' => 'Area',
	'Class:Server/Attribute:room_id+' => 'Area at Location',
	'Class:PC/Attribute:room_id' => 'Area',
	'Class:PC/Attribute:room_id+' => 'Area at Location',
	'Menu:NewLocation' => 'New Location',
	'Menu:SearchLocation' => 'Search Location',
	'Menu:NewRoom' => 'New Area',
	'Menu:SearchRoom' => 'Search Area',
	'Menu:Count' => 'Number of locations',
	'Menu:Location:Count' => '%1$d Locations',
));
?>
