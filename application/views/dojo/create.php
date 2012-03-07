<?php
$dojo_name = array(
	'name'	=> 'dojo_name',
	'id'	=> 'dojo_name',
	'value'	=> set_value('dojo_name'),
	'maxlength'	=> 100,
	'size'	=> 30,
);
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 100,
	'size'	=> 30,
);
$times = array(
	'name'	=> 'time',
	'id'	=> 'time',
	'value'	=> set_value('time'),
	'maxlength'	=> 100,
	'size'	=> 30,
);

$country = array(
	'name'	=> 'country',
	'id'	=> 'country',
	'maxlength'	=> 100,
	'size'	=> 30,
);
$_countries = array(
  "" => "Select a Country",
  "GB" => "United Kingdom",
  "US" => "United States",
  "AF" => "Afghanistan",
  "AL" => "Albania",
  "DZ" => "Algeria",
  "AS" => "American Samoa",
  "AD" => "Andorra",
  "AO" => "Angola",
  "AI" => "Anguilla",
  "AQ" => "Antarctica",
  "AG" => "Antigua And Barbuda",
  "AR" => "Argentina",
  "AM" => "Armenia",
  "AW" => "Aruba",
  "AU" => "Australia",
  "AT" => "Austria",
  "AZ" => "Azerbaijan",
  "BS" => "Bahamas",
  "BH" => "Bahrain",
  "BD" => "Bangladesh",
  "BB" => "Barbados",
  "BY" => "Belarus",
  "BE" => "Belgium",
  "BZ" => "Belize",
  "BJ" => "Benin",
  "BM" => "Bermuda",
  "BT" => "Bhutan",
  "BO" => "Bolivia",
  "BA" => "Bosnia And Herzegowina",
  "BW" => "Botswana",
  "BV" => "Bouvet Island",
  "BR" => "Brazil",
  "IO" => "British Indian Ocean Territory",
  "BN" => "Brunei Darussalam",
  "BG" => "Bulgaria",
  "BF" => "Burkina Faso",
  "BI" => "Burundi",
  "KH" => "Cambodia",
  "CM" => "Cameroon",
  "CA" => "Canada",
  "CV" => "Cape Verde",
  "KY" => "Cayman Islands",
  "CF" => "Central African Republic",
  "TD" => "Chad",
  "CL" => "Chile",
  "CN" => "China",
  "CX" => "Christmas Island",
  "CC" => "Cocos (Keeling) Islands",
  "CO" => "Colombia",
  "KM" => "Comoros",
  "CG" => "Congo",
  "CD" => "Congo, The Democratic Republic Of The",
  "CK" => "Cook Islands",
  "CR" => "Costa Rica",
  "CI" => "Cote D'Ivoire",
  "HR" => "Croatia (Local Name: Hrvatska)",
  "CU" => "Cuba",
  "CY" => "Cyprus",
  "CZ" => "Czech Republic",
  "DK" => "Denmark",
  "DJ" => "Djibouti",
  "DM" => "Dominica",
  "DO" => "Dominican Republic",
  "TP" => "East Timor",
  "EC" => "Ecuador",
  "EG" => "Egypt",
  "SV" => "El Salvador",
  "GQ" => "Equatorial Guinea",
  "ER" => "Eritrea",
  "EE" => "Estonia",
  "ET" => "Ethiopia",
  "FK" => "Falkland Islands (Malvinas)",
  "FO" => "Faroe Islands",
  "FJ" => "Fiji",
  "FI" => "Finland",
  "FR" => "France",
  "FX" => "France, Metropolitan",
  "GF" => "French Guiana",
  "PF" => "French Polynesia",
  "TF" => "French Southern Territories",
  "GA" => "Gabon",
  "GM" => "Gambia",
  "GE" => "Georgia",
  "DE" => "Germany",
  "GH" => "Ghana",
  "GI" => "Gibraltar",
  "GR" => "Greece",
  "GL" => "Greenland",
  "GD" => "Grenada",
  "GP" => "Guadeloupe",
  "GU" => "Guam",
  "GT" => "Guatemala",
  "GN" => "Guinea",
  "GW" => "Guinea-Bissau",
  "GY" => "Guyana",
  "HT" => "Haiti",
  "HM" => "Heard And Mc Donald Islands",
  "VA" => "Holy See (Vatican City State)",
  "HN" => "Honduras",
  "HK" => "Hong Kong",
  "HU" => "Hungary",
  "IS" => "Iceland",
  "IN" => "India",
  "ID" => "Indonesia",
  "IR" => "Iran (Islamic Republic Of)",
  "IQ" => "Iraq",
  "IE" => "Ireland",
  "IL" => "Israel",
  "IT" => "Italy",
  "JM" => "Jamaica",
  "JP" => "Japan",
  "JO" => "Jordan",
  "KZ" => "Kazakhstan",
  "KE" => "Kenya",
  "KI" => "Kiribati",
  "KP" => "Korea, Democratic People's Republic Of",
  "KR" => "Korea, Republic Of",
  "KW" => "Kuwait",
  "KG" => "Kyrgyzstan",
  "LA" => "Lao People's Democratic Republic",
  "LV" => "Latvia",
  "LB" => "Lebanon",
  "LS" => "Lesotho",
  "LR" => "Liberia",
  "LY" => "Libyan Arab Jamahiriya",
  "LI" => "Liechtenstein",
  "LT" => "Lithuania",
  "LU" => "Luxembourg",
  "MO" => "Macau",
  "MK" => "Macedonia, Former Yugoslav Republic Of",
  "MG" => "Madagascar",
  "MW" => "Malawi",
  "MY" => "Malaysia",
  "MV" => "Maldives",
  "ML" => "Mali",
  "MT" => "Malta",
  "MH" => "Marshall Islands",
  "MQ" => "Martinique",
  "MR" => "Mauritania",
  "MU" => "Mauritius",
  "YT" => "Mayotte",
  "MX" => "Mexico",
  "FM" => "Micronesia, Federated States Of",
  "MD" => "Moldova, Republic Of",
  "MC" => "Monaco",
  "MN" => "Mongolia",
  "MS" => "Montserrat",
  "MA" => "Morocco",
  "MZ" => "Mozambique",
  "MM" => "Myanmar",
  "NA" => "Namibia",
  "NR" => "Nauru",
  "NP" => "Nepal",
  "NL" => "Netherlands",
  "AN" => "Netherlands Antilles",
  "NC" => "New Caledonia",
  "NZ" => "New Zealand",
  "NI" => "Nicaragua",
  "NE" => "Niger",
  "NG" => "Nigeria",
  "NU" => "Niue",
  "NF" => "Norfolk Island",
  "MP" => "Northern Mariana Islands",
  "NO" => "Norway",
  "OM" => "Oman",
  "PK" => "Pakistan",
  "PW" => "Palau",
  "PA" => "Panama",
  "PG" => "Papua New Guinea",
  "PY" => "Paraguay",
  "PE" => "Peru",
  "PH" => "Philippines",
  "PN" => "Pitcairn",
  "PL" => "Poland",
  "PT" => "Portugal",
  "PR" => "Puerto Rico",
  "QA" => "Qatar",
  "RE" => "Reunion",
  "RO" => "Romania",
  "RU" => "Russian Federation",
  "RW" => "Rwanda",
  "KN" => "Saint Kitts And Nevis",
  "LC" => "Saint Lucia",
  "VC" => "Saint Vincent And The Grenadines",
  "WS" => "Samoa",
  "SM" => "San Marino",
  "ST" => "Sao Tome And Principe",
  "SA" => "Saudi Arabia",
  "SN" => "Senegal",
  "SC" => "Seychelles",
  "SL" => "Sierra Leone",
  "SG" => "Singapore",
  "SK" => "Slovakia (Slovak Republic)",
  "SI" => "Slovenia",
  "SB" => "Solomon Islands",
  "SO" => "Somalia",
  "ZA" => "South Africa",
  "GS" => "South Georgia, South Sandwich Islands",
  "ES" => "Spain",
  "LK" => "Sri Lanka",
  "SH" => "St. Helena",
  "PM" => "St. Pierre And Miquelon",
  "SD" => "Sudan",
  "SR" => "Suriname",
  "SJ" => "Svalbard And Jan Mayen Islands",
  "SZ" => "Swaziland",
  "SE" => "Sweden",
  "CH" => "Switzerland",
  "SY" => "Syrian Arab Republic",
  "TW" => "Taiwan",
  "TJ" => "Tajikistan",
  "TZ" => "Tanzania, United Republic Of",
  "TH" => "Thailand",
  "TG" => "Togo",
  "TK" => "Tokelau",
  "TO" => "Tonga",
  "TT" => "Trinidad And Tobago",
  "TN" => "Tunisia",
  "TR" => "Turkey",
  "TM" => "Turkmenistan",
  "TC" => "Turks And Caicos Islands",
  "TV" => "Tuvalu",
  "UG" => "Uganda",
  "UA" => "Ukraine",
  "AE" => "United Arab Emirates",
  "UM" => "United States Minor Outlying Islands",
  "UY" => "Uruguay",
  "UZ" => "Uzbekistan",
  "VU" => "Vanuatu",
  "VE" => "Venezuela",
  "VN" => "Viet Nam",
  "VG" => "Virgin Islands (British)",
  "VI" => "Virgin Islands (U.S.)",
  "WF" => "Wallis And Futuna Islands",
  "EH" => "Western Sahara",
  "YE" => "Yemen",
  "YU" => "Yugoslavia",
  "ZM" => "Zambia",
  "ZW" => "Zimbabwe"
);

$location = array(
	'name'	=> 'location',
	'id'	=> 'location',
	'value'	=> set_value('location'),
	'maxlength'	=> 100,
	'size'	=> 30,
);

$coordinates = array(
	'name'	=> 'coordinates',
	'id'	=> 'coordinates',
	'value'	=> set_value('coordinates'),
	'maxlength'	=> 100,
	'size'	=> 30,
);

$google_group = array(
	'name'	=> 'google_group',
	'id'	=> 'google_group',
	'value'	=> set_value('google_group'),
	'maxlength'	=> 200,
	'size'	=> 30,
);

$twitter = array(
	'name'	=> 'twitter',
	'id'	=> 'twitter',
	'value'	=> set_value('twitter'),
	'maxlength'	=> 100,
	'size'	=> 30,
);
$default_note = "<ul><li>A pack lunch.</li><li>A laptop. Borrow one from someone if needs be.<em><br></em></li><li><strong>A parent! (Very important). If you are 12 or under, your parent must stay with you during the session.</strong></li></ul>";

$notes = array(
	'name'	=> 'notes',
	'id'	=> 'notes',
	'value'	=> (set_value('notes')=="")?$default_note:set_value('notes'),
	'maxlength'	=> 100,
	'size'	=> 30,
);

$eb_id = array(
	'name'	=> 'eb_id',
	'id'	=> 'eb_id',
	'value'	=> set_value('eb_id'),
	'maxlength'	=> 100,
	'size'	=> 30,
);

$need_mentors = array(
    'name'        => 'need_mentors',
    'id'          => 'need_mentors',
    'value'       => 1,
    'checked'     => set_checkbox('need_mentors', 1, FALSE),
    'style'       => 'margin:10px',
    );

$stage = array(
    'name'        => 'stage',
    'id'          => 'stage',
    'style' => 'margin-top: 4px;',
    );

$supporter_image = array(
	'name'	=> 'supporter_image',
	'id'	=> 'supporter_image',
	'value'	=> set_value('supporter_image'),
	'maxlength'	=> 200,
	'size'	=> 30,
);
?>
<div id="content">
    <div class="wrap">        
        <form method="post" action="/dojo/create" class="form-horizontal">
            <div id="main">
                 <div class="alert alert-block">
                      <h4 class="alert-heading">Pre-game warning!</h4>
                      Please please please, make sure this is not a duplicate Dojo. Check out the list here of <a href="/dojo">verified existing Dojos here</a> and make sure you corresponding with people in your Dojo before creating this. Otherwise we'll have to delete the listing, grab our pitchforks and come after you! Later on we will be adding support for you to claim membership to a Dojo and whatnot.
                </div>
                <fieldset>
                    <legend>Required Dojo Information</legend>
                    <div class="control-group">
                        <label class="control-label" for="dojo_name">Dojo Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="dojo_name" name="dojo_name" value="<?=$dojo_name['value'];?>">
                            <div class="error-text"> <?php echo form_error($dojo_name['name']); ?><?php echo isset($errors[$dojo_name['name']])?$errors[$dojo_name['name']]:''; ?></div><p class="help-block"> Normally after an area, like <i>"Cork"</i> or multiple Dojos are in your area <i>"GitHub San Fran"</i>. Try refrain from prefixing the name with <i>"CoderDojo"</i></p>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="country">Country</label>
                        <div class="controls">
                              <?=form_dropdown('country', $_countries, set_value('country'), 'style = "width:270px;"');?>
                              <p class="help-block"><div class="error-text"> <?php echo form_error($country['name']); ?><?php echo isset($errors[$country['name']])?$errors[$country['name']]:''; ?></div></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="email" name="email" value="<?=$email['value'];?>">
                            <div class="error-text"> <?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></div>
                            <p class="help-block">For your own CoderDojo email address (Eg. <i>limerick@coderdojo.com</i>), please contact us</p>
                        </div>
                    </div>

                    <legend>Recommended Information</legend>
                        <div class="control-group">
                            <label class="control-label" for="google_group">Google Group URL</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="google_group" name="google_group" value="<?=$google_group['value'];?>">
                                <div class="error-text"> <?php echo form_error($google_group['name']); ?><?php echo isset($errors[$google_group['name']])?$errors[$google_group['name']]:''; ?></div>
                                <p class="help-block">We recommend setting up a Discussion group so people can sign up for latest happenings and news and contribute.</p>
                            </div>
                      </div>
                      <div class="control-group">
                            <label class="control-label" for="twitter">Twitter</label>
                            <div class="controls">
                              <div class="input-prepend">
                                <span class="add-on">@</span>
                                <input class="span2" id="twitter" name="twitter" style="width:243px" size="16" type="text" value="<?=$twitter['value'];?>">
                              </div>
                              <div class="error-text"> <?php echo form_error($twitter['name']); ?><?php echo isset($errors[$twitter['name']])?$errors[$twitter['name']]:''; ?></div>
                              <p class="help-block">Again, a useful way for sharing information and being found. We can also help share messages to followers.</p>

                            </div>
                      </div>

                        <div class="control-group">
                            <label class="control-label" for="notes">Notes</label>
                            <div class="controls">
                                <textarea class="input-xlarge" id="notes" name="notes" rows="3" cols="3" style="height:100px; resize: vertical;" ><?=$notes['value'];?></textarea>
                                <div class="error-text"><?php echo form_error($notes['name']); ?><?php echo isset($errors[$notes['name']])?$errors[$notes['name']]:''; ?></div><p class="help-block">Dojo rules, where you are at in the setup, location notes, etc. (HTML supported)</p>
                            </div>
                        </div>

                    <legend>Other Information</legend>
                    <div class="control-group">
                        <label class="control-label" for="time">Times</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="time" name="time" value="<?=$times['value'];?>">
                            <div class="error-text"> <?php echo form_error($times['name']); ?><?php echo isset($errors[$times['name']])?$errors[$times['name']]:''; ?></div><p class="help-block"> State wether its every week or on a certain day (Eg. <i>"Every Friday, 5.30pm - 8pm"</i> or <i>"Saturday 25th, 12pm - 3pm"</i>)</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="location">Location</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="location" name="location" value="<?=$location['value'];?>">
                           <div class="error-text"><?php echo form_error($location['name']); ?><?php echo isset($errors[$location['name']])?$errors[$location['name']]:''; ?></div> <p class="help-block">Address of the Dojo (Eg. <i>LIT Downtown Centre, George's Quay, Limerick</i>)</p>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="coordinates">Coordinates</label>
                        <div class="controls">
                           <input type="text" class="input-xlarge" id="coordinates" name="coordinates" value="<?=$coordinates['value'];?>">
                           <div class="error-text"><?php echo form_error($coordinates['name']); ?><?php echo isset($errors[$coordinates['name']])?$errors[$coordinates['name']]:''; ?></div><p class="help-block">Coordinates of Dojo Location for Google Map (Eg. <i>51.888054,-8.403111</i>), <a href="http://kata.coderdojo.com/index.php?title=Dojo_Coordinates" target="_blank">Guide to getting co-ordinates here</a>; Leave blank for no map </p>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="eb_id">EventBrite Event ID</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="eb_id" name="eb_id" value="<?=$eb_id['value'];?>"">
                            <div class="error-text"><?php echo form_error($eb_id['name']); ?><?php echo isset($errors[$eb_id['name']])?$errors[$eb_id['name']]:''; ?></div><p class="help-block">If EventBrite, enter your event id (Eg. <i>3014403161</i>) to embed, <a href="http://kata.coderdojo.com/index.php?title=Eventbrite_event_id">how to find event id</a>, otherwise leave blank for no booking widget</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <input type="submit" class="btn-primary" value="Update Dojo Listing" style="padding: 5px 75px;">
                        </div>
                    </div>
                </fieldset>
            </div>
            <div id="sidebar">
                <div class="widget" id="widget-status">
                    <legend>Status Messages</legend>
                        <div class="control-group" style="margin-left: -40px;">
                            <label class="control-label" for="need_mentors">Need Mentors</label>
                            <div class="controls">
                                <label class="checkbox inline" style="margin-top: -5px; margin-left: -28px;">
                                    <?=form_checkbox($need_mentors);?>
                                </label>
                            </div>
                        </div>


                    <div class="control-group" style="margin-left: -40px;">
                        <label class="control-label">Current Stage</label>
                        <div class="controls">
                          <label class="radio">
                            <?=form_radio($stage, 0, set_radio('stage', '0', TRUE));?>
                            In planning
                          </label>
                          <label class="radio">
                            <?=form_radio($stage, 1, set_radio('stage', '1'));?>
                            Open, come along
                          </label>
                          <label class="radio">
                            <?=form_radio($stage, 2, set_radio('stage', '2'));?>
                            Register ahead
                          </label>
                          <label class="radio">
                            <?=form_radio($stage, 3, set_radio('stage', '3'));?>
                            Full up
                          </label>
                        </div>
                    </div>
                </div>
                <div class="widget" id="widget-supporters">
                    <legend>Supporters Image URL</legend>
                        <input type="text" class="input-xlarge" id="supporter" name="supporter_image" value="<?=$supporter_image['value'];?>">
                        <p class="help-block">If you have a Dojo supporter(s), if they are providing space/wifi/pizza and would like to show it, enter URL to a supporter image here, please make sure its 570x200 pixels, otherwise leave blank</p>

                  </div>
                </div>
            </div>
        </form>
    </div><!--.wrap-->
</div><!--#content-->