<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config ['Customers-field'] = array (	'Generate Pin' => 'pin',
										'Allow Local Calls' => 'local_call',
										'Allow Recording' => 'is_recording',
										'Billing Schedule' => 'sweep_id',
										'Allow IP Management' => 'allow_ip_management',
										'Billing Day' => 'invoice_day',
										'Rate Group' => 'pricelist_id',
										"Create Sip Device"=>"sipdevice_flag",
										'LC Charge / Min' => 'charge_per_min',
										"Currency"=>"currency_id",
										'Account Type' => "posttoexternal",
										"Balance"=>"balance",
										"Credit Limit"=>"credit_limit",
										"Country"=>"country_id",
										"Timezone"=>"timezone_id",
										"Currency"=>"currency_id",
										"Email Alerts"=>"notify_flag"
								);
$config ['Customers-mapper-fields'] = array ( "general_info" => array(
												'Account'=>"number",
												'Password' => 'password',
												'First Name' => 'first_name',
												'Last Name' => 'last_name',
												"Company"=>"company",
												"Phone"=>"telephone_1",
												"Mobile"=>"telephone_2",
												"Email"=> "email",
												"Address"=> "address_1",
												"City"=>"city",
												"Province/State"=>"province",
												"Zip/Postal Code"=>"postal_code"
												),
									  "settings"=>array(
												'Number Translation' => 'dialed_modify',
												'Out Callerid Translation' => 'std_cid_translation',
												'In Callerid Translation' => 'did_cid_translation',
												'Concurrent Calls' => 'maxchannels',
												'CPS' => "cps",
												"SIP Username"=>"sip_username",
												"SIP Password"=>"sip_password"
												)
								);

/* End of file config.php */
/* Location: ./system/application/config/api.php */
