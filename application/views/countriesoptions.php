<?php $CI =& get_instance();
if(!isset($selectedCountry)) $selectedCountry="0";
$this->load->model('commonFunctions');
$contries=$CI->commonFunctions->getCountries($selectedCountry);
echo $contries;
?>