<?php
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

    $country = $_countries[$dojo_data[0]->country];

?>
<div id="content">
    <div class="wrap">
        <div id="main">
            <legend><b><?=$dojo_data[0]->name; ?></b></legend>
            <table class="table" style="margin-left: 30px;">
                <?php if($dojo_data[0]->time){ ?>
                <tr>
                    <td style="width: 25px;"><b>Time</b></td>
                    <td><?=$dojo_data[0]->time; ?></td>
                </tr>
                <?php } if($dojo_data[0]->location) { ?>
                <tr>
                    <td style="width: 25px;"><b>Location</b></td>
                    <td><?=$dojo_data[0]->location; ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td style="width: 25px;"><b>Country</b></td>
                    <td><?=$country;?></td>
                </tr>
                <?php if($dojo_data[0]->notes) { ?>
                <tr>
                    <td style="width: 25px;"><b>Notes</b></td>
                    <td><?=$dojo_data[0]->notes; ?></td>
                </tr>
                <?php } ?>
            </table>

            <?php if($dojo_data[0]->coordinates) {?>
            <legend>Map</legend>
            <iframe width="550" height="250" style="margin-left: 37px; frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?=$dojo_data[0]->coordinates; ?>&amp;aq=&amp;sll=<?=$dojo_data[0]->coordinates; ?>&amp;sspn=0.002453,0.00618&amp;ie=UTF8&amp;t=h&amp;z=17&amp;ll=<?=$dojo_data[0]->coordinates; ?>&amp;output=embed"></iframe><br /><small><a style="margin-left: 483px;" href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=51.888054,-8.403111&amp;aq=&amp;sll=<?=$dojo_data[0]->coordinates; ?>&amp;sspn=0.002453,0.00618&amp;ie=UTF8&amp;t=h&amp;z=14&amp;ll=51.888054,-8.403111" style="color:#0000FF;text-align:left" >View Larger Map</a></small>
            <? } if($dojo_data[0]->eb_id) { ?>
            <legend>Booking</legend>
            <div style="width:550px; text-align:left; margin-left: 37px;">
                <iframe  src="http://www.eventbrite.com/tickets-external?eid=<?=$dojo_data[0]->eb_id; ?>&ref=etckt" frameborder="0" height="224" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>
            </div>
            <? } if($dojo_data[0]->supporter_image) { ?>
            <legend>Dojo Supported By</legend>
            <div>
                <img src="<?=$dojo_data[0]->supporter_image;?>"  alt="" style="max-height: 200px; max-width: 570px;"/>
            </div>
            <?php } ?>
        </div><!--#main-->

        <div id="sidebar">

            <div class="widget" id="widget-status">
                <legend>Status</legend>
                 <?php if(!$dojo_data[0]->verified){?>
                <div class="alert"><b>Not verified</b> <a href="http://kata.coderdojo.com/index.php?title=Unverified_Dojo_Listing" target="_blank">Learn more...</a> </div>
                 <?php } if($dojo_data[0]->stage == 0){?>
                <div class="alert alert-info"><b>In planning</b></div>
                <?php } if($dojo_data[0]->stage == 1){?>
                <div class="alert alert-success"><b>Active</b> Just show up</div>
                <?php } if($dojo_data[0]->stage == 2){?>
                <div class="alert alert-info"><b>Register ahead</b></div>
                <?php } if($dojo_data[0]->stage == 3){?>
                <div class="alert alert-error"><b>Dojo full sorry</b></div>
                <?php } if($dojo_data[0]->need_mentors == 1){?>
                <div class="alert alert-warning"><b>Mentors needed!</b></div>
                <?php }?>
            </div><!--widget-status-->

            <div class="widget" id="widget-contact">
                <legend>Contact</legend>
                <table class="table">
                    <tr>
                        <td><b>Email</b></td>
                        <td><a href="mailto:<?=$dojo_data[0]->email; ?>"><?=$dojo_data[0]->email; ?></a></td>
                    </tr>
                    <?php if($dojo_data[0]->twitter){?>
                    <tr>
                        <td><b>Twitter</b></td>
                        <td><a href="http://twitter.com/<?=$dojo_data[0]->twitter; ?>">@<?=$dojo_data[0]->twitter; ?></a></td>
                    </tr>
                    <?php } if($dojo_data[0]->google_group){?>
                    <tr>
                        <td><b>Google Group</b></td>
                        <td><a href="<?=$dojo_data[0]->google_group; ?>">http://group.go.....</a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div><!--widget-contact-->


        </div>
    </div><!--.wrap-->
</div><!--#content-->