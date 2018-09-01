<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

// Class: Contract
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Contract/Attribute:org_id' => 'Customer',
	'Class:Contract/Attribute:org_id+' => '',
	'Class:Contract/Attribute:name' => 'Contract ID',
	'Class:Contract/Attribute:name+' => '',
	'Class:Contract/Attribute:start_date' => 'Contract Start',
	'Class:Contract/Attribute:start_date+' => '',
	'Class:Contract/Attribute:end_date' => 'Contract End',
	'Class:Contract/Attribute:end_date+' => '',
	'Class:Contract/Attribute:cost' => 'Unit Price',
	'Class:Contract/Attribute:cost+' => 'Unit Price to be multiplied with billing quantity',
	'Class:Contract/Attribute:cost_currency' => 'Billing Currency',
	'Class:Contract/Attribute:cost_currency+' => 'Currency of billing amount.',
	'Class:Contract/Attribute:cost_currency/Value:ringgit' => 'MYR',
	'Class:Contract/Attribute:cost_currency/Value:ringgit+' => 'Malaysian Ringgit',
	'Class:Contract/Attribute:cost_currency/Value:dollars' => 'USD',
	'Class:Contract/Attribute:cost_currency/Value:dollars+' => 'US Dollar',
	'Class:Contract/Attribute:cost_currency/Value:euros' => 'EUR',
	'Class:Contract/Attribute:cost_currency/Value:euros+' => 'Euro',
	'Class:Contract/Attribute:contracttype_id' => 'Contract type',
	'Class:Contract/Attribute:contracttype_id+' => '',
	'Class:Contract/Attribute:contracttype_name' => 'Contract type Name',
	'Class:Contract/Attribute:contracttype_name+' => '',
	'Class:Contract/Attribute:billing_frequency' => 'Billing frequency',
	'Class:Contract/Attribute:billing_frequency+' => '',
	'Class:Contract/Attribute:billing_quantity' => 'Billing quantity',
	'Class:Contract/Attribute:billing_quantity+' => 'Quantity to be billed',
	'Class:Contract/Attribute:cost_unit' => 'Price Unit',
	'Class:Contract/Attribute:cost_unit+' => 'Price unit as multiplier for qantities e.g. 10MB = 10*1024',
	'Class:Contract/Attribute:documentation' => 'Documentation complete',
	'Class:Contract/Attribute:documentation+' => 'Contractually relevant documentation complete (e.g. UAT)',
	'Menu:RequestManagement' => 'Request Management',
	'Menu:RequestManagement+' => 'Request Management',

));

//
// Class: CustomerContract
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:CustomerContract/Attribute:contractmaster' => 'Master Contract',
    'Class:CustomerContract/Attribute:contractmaster+' => 'Referring master contract for SOFs',
    'Class:CustomerContract/Attribute:location_name' => 'Service Location',
	'Class:CustomerContract/Attribute:location_name+' => 'Main service location associated with customer contract',
    'Class:CustomerContract/Attribute:VBTreference' => 'Provider Reference',
	'Class:CustomerContract/Attribute:VBTreference+' => 'Reference information on provider invoices or similar documents',
    'Class:CustomerContract/Attribute:CustomerReference' => 'Customer Reference',
	'Class:CustomerContract/Attribute:CustomerReference+' => 'Reference information used by customer',
    'Class:CustomerContract/Attribute:Tenure' => 'Tenure',
	'Class:CustomerContract/Attribute:Tenure+' => 'Total contract duration in months',
    'Class:CustomerContract/Attribute:BillingStartDate' => 'Billing Start Date',
	'Class:CustomerContract/Attribute:BillingStartDate+' => 'Actual billing start date',
    'Class:CustomerContract/Attribute:RevenueCodeID' => 'Code',
	'Class:CustomerContract/Attribute:RevenueCodeID+' => 'Revenue code referring to revenue category',
    'Class:CustomerContract/Attribute:notes' => 'Notes/Remarks',
	'Class:CustomerContract/Attribute:notes+' => 'Enter any kind of remarks',
	'CustomerContract:general' => 'General Information',
	'CustomerContract:reference' => 'Reference',
	'CustomerContract:lifecycle' => 'Contract Lifecycle',
	'CustomerContract:billing' => 'Billing Information',
	'CustomerContract:accounting' => 'Accounting Information',
	'CustomerContract:remarks' => 'Remarks',
));

//
// Class: RevenueType
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:RevenueType/Attribute:name' => 'Name',
	'Class:RevenueType/Attribute:name+' => '',
    'Class:RevenueType/Attribute:RevenueCodeID' => 'Revenue Code',
	'Class:RevenueType/Attribute:RevenueCodeID+' => 'Revenue code referring to revenue category',
    'Class:RevenueType/Attribute:RevenueCategory' => 'Revenue Category',
	'Class:RevenueType/Attribute:RevenueCategory+' => 'Long text of revenue code',
    'Class:RevenueType/Attribute:GLcode' => 'GL Code',
	'Class:RevenueType/Attribute:GLcode+' => 'GL Code used in Microsoft Dynamics',
));

?>