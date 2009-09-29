<?php
/*
 * @version $Id: rules.constant.php 5351 2007-08-07 11:57:46Z walid $
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2008 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org
 -------------------------------------------------------------------------

 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 --------------------------------------------------------------------------
 */

// ----------------------------------------------------------------------
// Original Author of file: Walid Nouh
// Purpose of file:
// ----------------------------------------------------------------------

// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
//INFORMATIONS
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
global $LANG,$DATA_INJECTION_INFOS;

// ----------------------------------------------------------------------
//INFOCOM INFOS
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['buy_date']['table']='glpi_infocoms';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['buy_date']['field']='buy_date';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['buy_date']['name']=$LANG["financial"][14];
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['buy_date']['type']='date';

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['use_date']['table']='glpi_infocoms';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['use_date']['field']='use_date';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['use_date']['name']=$LANG["financial"][76];
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['use_date']['type']='date';

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['warranty_duration']['table']='glpi_infocoms';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['warranty_duration']['field']='warranty_duration';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['warranty_duration']['name']=$LANG["financial"][15];
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['warranty_duration']['type']='integer';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['warranty_duration']['input_type']='dropdown';

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['warranty_info']['table']='glpi_infocoms';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['warranty_info']['field']='warranty_info';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['warranty_info']['name']=$LANG["financial"][16];

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['warranty_value']['table']='glpi_infocoms';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['warranty_value']['field']='warranty_value';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['warranty_value']['name']=$LANG["financial"][78];

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['FK_enterprise']['table']='glpi_enterprises';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['FK_enterprise']['field']='name';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['FK_enterprise']['name']=$LANG["financial"][26];
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['FK_enterprise']['linkfield']='FK_enterprise';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['FK_enterprise']['input_type']='dropdown';

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['num_commande']['table']='glpi_infocoms';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['num_commande']['field']='num_commande';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['num_commande']['name']=$LANG["financial"][18];

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['bon_livraison']['table']='glpi_infocoms';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['bon_livraison']['field']='bon_livraison';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['bon_livraison']['name']=$LANG["financial"][19];

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['num_immo']['table']='glpi_infocoms';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['num_immo']['field']='num_immo';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['num_immo']['name']=$LANG["financial"][20];

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['value']['table']='glpi_infocoms';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['value']['field']='value';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['value']['name']=$LANG["financial"][21];

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['amort_time']['table']='glpi_infocoms';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['amort_time']['field']='amort_time';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['amort_time']['name']=$LANG["financial"][23];
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['amort_time']['type']='integer';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['amort_time']['input_type']='dropdown';

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['amort_type']['table']='glpi_infocoms';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['amort_type']['field']='amort_type';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['amort_type']['name']=$LANG["financial"][22];
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['amort_type']['type']='integer';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['amort_type']['input_type']='dropdown';

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['amort_coeff']['table']='glpi_infocoms';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['amort_coeff']['field']='amort_coeff';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['amort_coeff']['name']=$LANG["financial"][77];
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['amort_coeff']['type']='float';

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['comments']['table']='glpi_infocoms';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['comments']['field']='comments';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['comments']['name']=$LANG["common"][25];
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['comments']['table_type']='multitext';

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['facture']['table']='glpi_infocoms';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['facture']['field']='facture';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['facture']['name']=$LANG["financial"][82];

$DATA_INJECTION_INFOS[INFOCOM_TYPE]['budget']['table']='glpi_dropdown_budget';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['budget']['field']='budget';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['budget']['name']=$LANG["financial"][87];
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['budget']['linkfield']='FK_enterprise';
$DATA_INJECTION_INFOS[INFOCOM_TYPE]['budget']['input_type']='dropdown';

// ----------------------------------------------------------------------
//COMPUTER INFOS
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['state']['table']='glpi_dropdown_state';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['state']['field']='name';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['state']['name']=$LANG["joblist"][0];
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['state']['linkfield']='state';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['state']['input_type']='dropdown';

$DATA_INJECTION_INFOS[COMPUTER_TYPE]['location']['table']='glpi_dropdown_locations';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['location']['field']='name';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['location']['name']=$LANG["common"][15];
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['location']['linkfield']='location';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['location']['input_type']='dropdown';

$DATA_INJECTION_INFOS[COMPUTER_TYPE]['FK_glpi_enterprise']['table']='glpi_dropdown_manufacturer';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['FK_glpi_enterprise']['field']='name';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['FK_glpi_enterprise']['name']=$LANG["common"][5];
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['FK_glpi_enterprise']['linkfield']='FK_glpi_enterprise';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['FK_glpi_enterprise']['input_type']='dropdown';

$DATA_INJECTION_INFOS[COMPUTER_TYPE]['type']['table']='glpi_type_computers';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['type']['field']='name';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['type']['name']=$LANG["common"][17];
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['type']['linkfield']='type';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['type']['input_type']='dropdown';

$DATA_INJECTION_INFOS[COMPUTER_TYPE]['model']['table']='glpi_dropdown_model';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['model']['field']='name';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['model']['name']=$LANG["common"][22];
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['model']['linkfield']='model';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['model']['input_type']='dropdown';

$DATA_INJECTION_INFOS[COMPUTER_TYPE]['FK_groups']['table']='glpi_groups';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['FK_groups']['field']='name';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['FK_groups']['name']=$LANG["common"][35];
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['FK_groups']['linkfield']='FK_groups';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['FK_groups']['input_type']='dropdown';

$DATA_INJECTION_INFOS[COMPUTER_TYPE]['tech_num']['table']='glpi_users';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['tech_num']['field']='name';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['tech_num']['name']=$LANG["common"][10];
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['tech_num']['linkfield']='tech_num';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['tech_num']['input_type']='dropdown_users';

$DATA_INJECTION_INFOS[COMPUTER_TYPE]['comments']['table']='glpi_computers';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['comments']['field']='comments';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['comments']['name']=$LANG["common"][25];
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['comments']['table_type']='multitext';

$DATA_INJECTION_INFOS[COMPUTER_TYPE]['contract']['table']='glpi_contracts';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['contract']['field']='comments';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['contract']['name']=$LANG["financial"][1];
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['contract']['input_type']='dropdown';

$DATA_INJECTION_INFOS[COMPUTER_TYPE]['template']['table']='glpi_computers';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['template']['field']='tplname';
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['template']['name']=$LANG["common"][13];
$DATA_INJECTION_INFOS[COMPUTER_TYPE]['template']['input_type']='dropdown';

// ----------------------------------------------------------------------
//MONITOR INFOS
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[MONITOR_TYPE]['state']['table']='glpi_dropdown_state';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['state']['field']='name';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['state']['name']=$LANG["joblist"][0];
$DATA_INJECTION_INFOS[MONITOR_TYPE]['state']['linkfield']='state';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['state']['input_type']='dropdown';

$DATA_INJECTION_INFOS[MONITOR_TYPE]['location']['table']='glpi_dropdown_locations';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['location']['field']='name';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['location']['name']=$LANG["common"][15];
$DATA_INJECTION_INFOS[MONITOR_TYPE]['location']['linkfield']='location';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['location']['input_type']='dropdown';

$DATA_INJECTION_INFOS[MONITOR_TYPE]['FK_glpi_enterprise']['table']='glpi_dropdown_manufacturer';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['FK_glpi_enterprise']['field']='name';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['FK_glpi_enterprise']['name']=$LANG["common"][5];
$DATA_INJECTION_INFOS[MONITOR_TYPE]['FK_glpi_enterprise']['linkfield']='FK_enterprise';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['FK_glpi_enterprise']['input_type']='dropdown';

$DATA_INJECTION_INFOS[MONITOR_TYPE]['type']['table']='glpi_type_monitors';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['type']['field']='name';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['type']['name']=$LANG["common"][17];
$DATA_INJECTION_INFOS[MONITOR_TYPE]['type']['linkfield']='type';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['type']['input_type']='dropdown';

$DATA_INJECTION_INFOS[MONITOR_TYPE]['model']['table']='glpi_dropdown_model_monitors';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['model']['field']='name';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['model']['name']=$LANG["common"][22];
$DATA_INJECTION_INFOS[MONITOR_TYPE]['model']['linkfield']='model';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['model']['input_type']='dropdown';

$DATA_INJECTION_INFOS[MONITOR_TYPE]['FK_groups']['table']='glpi_groups';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['FK_groups']['field']='name';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['FK_groups']['name']=$LANG["common"][35];
$DATA_INJECTION_INFOS[MONITOR_TYPE]['FK_groups']['linkfield']='FK_groups';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['FK_groups']['input_type']='dropdown';

$DATA_INJECTION_INFOS[MONITOR_TYPE]['tech_num']['table']='glpi_users';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['tech_num']['field']='name';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['tech_num']['name']=$LANG["common"][10];
$DATA_INJECTION_INFOS[MONITOR_TYPE]['tech_num']['linkfield']='tech_num';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['tech_num']['input_type']='dropdown_users';

$DATA_INJECTION_INFOS[MONITOR_TYPE]['comments']['table']='glpi_monitors';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['comments']['field']='comments';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['comments']['name']=$LANG["common"][25];
$DATA_INJECTION_INFOS[MONITOR_TYPE]['comments']['table_type']='multitext';

$DATA_INJECTION_INFOS[MONITOR_TYPE]['contract']['table']='glpi_contracts';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['contract']['field']='comments';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['contract']['name']=$LANG["financial"][1];
$DATA_INJECTION_INFOS[MONITOR_TYPE]['contract']['input_type']='dropdown';

$DATA_INJECTION_INFOS[MONITOR_TYPE]['template']['table']='glpi_monitors';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['template']['field']='tplname';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['template']['name']=$LANG["common"][13];
$DATA_INJECTION_INFOS[MONITOR_TYPE]['template']['input_type']='dropdown';

$DATA_INJECTION_INFOS[MONITOR_TYPE]['is_global']['table']='glpi_monitors';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['is_global']['field']='is_global';
$DATA_INJECTION_INFOS[MONITOR_TYPE]['is_global']['name']=$LANG["peripherals"][33];
$DATA_INJECTION_INFOS[MONITOR_TYPE]['is_global']['input_type']='dropdown';

// ----------------------------------------------------------------------
//PRINTER INFOS
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[PRINTER_TYPE]['state']['table']='glpi_dropdown_state';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['state']['field']='name';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['state']['name']=$LANG["joblist"][0];
$DATA_INJECTION_INFOS[PRINTER_TYPE]['state']['linkfield']='state';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['state']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PRINTER_TYPE]['location']['table']='glpi_dropdown_locations';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['location']['field']='name';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['location']['name']=$LANG["common"][15];
$DATA_INJECTION_INFOS[PRINTER_TYPE]['location']['linkfield']='location';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['location']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PRINTER_TYPE]['FK_glpi_enterprise']['table']='glpi_dropdown_manufacturer';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['FK_glpi_enterprise']['field']='name';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['FK_glpi_enterprise']['name']=$LANG["common"][5];
$DATA_INJECTION_INFOS[PRINTER_TYPE]['FK_glpi_enterprise']['linkfield']='FK_enterprise';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['FK_glpi_enterprise']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PRINTER_TYPE]['type']['table']='glpi_type_printers';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['type']['field']='name';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['type']['name']=$LANG["common"][17];
$DATA_INJECTION_INFOS[PRINTER_TYPE]['type']['linkfield']='type';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['type']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PRINTER_TYPE]['model']['table']='glpi_dropdown_model_printers';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['model']['field']='name';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['model']['name']=$LANG["common"][22];
$DATA_INJECTION_INFOS[PRINTER_TYPE]['model']['linkfield']='model';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['model']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PRINTER_TYPE]['FK_groups']['table']='glpi_groups';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['FK_groups']['field']='name';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['FK_groups']['name']=$LANG["common"][35];
$DATA_INJECTION_INFOS[PRINTER_TYPE]['FK_groups']['linkfield']='FK_groups';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['FK_groups']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PRINTER_TYPE]['tech_num']['table']='glpi_users';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['tech_num']['field']='name';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['tech_num']['name']=$LANG["common"][10];
$DATA_INJECTION_INFOS[PRINTER_TYPE]['tech_num']['linkfield']='tech_num';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['tech_num']['input_type']='dropdown_users';

$DATA_INJECTION_INFOS[PRINTER_TYPE]['comments']['table']='glpi_printers';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['comments']['field']='comments';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['comments']['name']=$LANG["common"][25];
$DATA_INJECTION_INFOS[PRINTER_TYPE]['comments']['table_type']='multitext';

$DATA_INJECTION_INFOS[PRINTER_TYPE]['contract']['table']='glpi_contracts';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['contract']['field']='comments';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['contract']['name']=$LANG["financial"][1];
$DATA_INJECTION_INFOS[PRINTER_TYPE]['contract']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PRINTER_TYPE]['template']['table']='glpi_printers';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['template']['field']='tplname';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['template']['name']=$LANG["common"][13];
$DATA_INJECTION_INFOS[PRINTER_TYPE]['template']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PRINTER_TYPE]['is_global']['table']='glpi_printers';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['is_global']['field']='is_global';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['is_global']['name']=$LANG["peripherals"][33];
$DATA_INJECTION_INFOS[PRINTER_TYPE]['is_global']['type']='dropdown';

$DATA_INJECTION_INFOS[PRINTER_TYPE]['recursive']['table'] = 'glpi_printers';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['recursive']['field'] = 'recursive';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['recursive']['name'] = $LANG["entity"][9];
$DATA_INJECTION_INFOS[PRINTER_TYPE]['recursive']['type'] = 'integer';
$DATA_INJECTION_INFOS[PRINTER_TYPE]['recursive']['input_type'] = 'yesno';

// ----------------------------------------------------------------------
//PHONE INFOS
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[PHONE_TYPE]['state']['table']='glpi_dropdown_state';
$DATA_INJECTION_INFOS[PHONE_TYPE]['state']['field']='name';
$DATA_INJECTION_INFOS[PHONE_TYPE]['state']['name']=$LANG["joblist"][0];
$DATA_INJECTION_INFOS[PHONE_TYPE]['state']['linkfield']='state';
$DATA_INJECTION_INFOS[PHONE_TYPE]['state']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PHONE_TYPE]['location']['table']='glpi_dropdown_locations';
$DATA_INJECTION_INFOS[PHONE_TYPE]['location']['field']='name';
$DATA_INJECTION_INFOS[PHONE_TYPE]['location']['name']=$LANG["common"][15];
$DATA_INJECTION_INFOS[PHONE_TYPE]['location']['linkfield']='location';
$DATA_INJECTION_INFOS[PHONE_TYPE]['location']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PHONE_TYPE]['FK_glpi_enterprise']['table']='glpi_dropdown_manufacturer';
$DATA_INJECTION_INFOS[PHONE_TYPE]['FK_glpi_enterprise']['field']='name';
$DATA_INJECTION_INFOS[PHONE_TYPE]['FK_glpi_enterprise']['name']=$LANG["common"][5];
$DATA_INJECTION_INFOS[PHONE_TYPE]['FK_glpi_enterprise']['linkfield']='FK_enterprise';
$DATA_INJECTION_INFOS[PHONE_TYPE]['FK_glpi_enterprise']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PHONE_TYPE]['type']['table']='glpi_type_phones';
$DATA_INJECTION_INFOS[PHONE_TYPE]['type']['field']='name';
$DATA_INJECTION_INFOS[PHONE_TYPE]['type']['name']=$LANG["common"][17];
$DATA_INJECTION_INFOS[PHONE_TYPE]['type']['linkfield']='type';
$DATA_INJECTION_INFOS[PHONE_TYPE]['type']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PHONE_TYPE]['model']['table']='glpi_dropdown_model_phones';
$DATA_INJECTION_INFOS[PHONE_TYPE]['model']['field']='name';
$DATA_INJECTION_INFOS[PHONE_TYPE]['model']['name']=$LANG["common"][22];
$DATA_INJECTION_INFOS[PHONE_TYPE]['model']['linkfield']='model';
$DATA_INJECTION_INFOS[PHONE_TYPE]['model']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PHONE_TYPE]['FK_groups']['table']='glpi_groups';
$DATA_INJECTION_INFOS[PHONE_TYPE]['FK_groups']['field']='name';
$DATA_INJECTION_INFOS[PHONE_TYPE]['FK_groups']['name']=$LANG["common"][35];
$DATA_INJECTION_INFOS[PHONE_TYPE]['FK_groups']['linkfield']='FK_groups';
$DATA_INJECTION_INFOS[PHONE_TYPE]['FK_groups']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PHONE_TYPE]['tech_num']['table']='glpi_users';
$DATA_INJECTION_INFOS[PHONE_TYPE]['tech_num']['field']='name';
$DATA_INJECTION_INFOS[PHONE_TYPE]['tech_num']['name']=$LANG["common"][10];
$DATA_INJECTION_INFOS[PHONE_TYPE]['tech_num']['linkfield']='tech_num';
$DATA_INJECTION_INFOS[PHONE_TYPE]['tech_num']['input_type']='dropdown_users';

$DATA_INJECTION_INFOS[PHONE_TYPE]['comments']['table']='glpi_phones';
$DATA_INJECTION_INFOS[PHONE_TYPE]['comments']['field']='comments';
$DATA_INJECTION_INFOS[PHONE_TYPE]['comments']['name']=$LANG["common"][25];
$DATA_INJECTION_INFOS[PHONE_TYPE]['comments']['table_type']='multitext';

$DATA_INJECTION_INFOS[PHONE_TYPE]['contract']['table']='glpi_contracts';
$DATA_INJECTION_INFOS[PHONE_TYPE]['contract']['field']='comments';
$DATA_INJECTION_INFOS[PHONE_TYPE]['contract']['name']=$LANG["financial"][1];
$DATA_INJECTION_INFOS[PHONE_TYPE]['contract']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PHONE_TYPE]['template']['table']='glpi_phones';
$DATA_INJECTION_INFOS[PHONE_TYPE]['template']['field']='tplname';
$DATA_INJECTION_INFOS[PHONE_TYPE]['template']['name']=$LANG["common"][13];
$DATA_INJECTION_INFOS[PHONE_TYPE]['template']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PHONE_TYPE]['is_global']['table']='glpi_phones';
$DATA_INJECTION_INFOS[PHONE_TYPE]['is_global']['field']='is_global';
$DATA_INJECTION_INFOS[PHONE_TYPE]['is_global']['name']=$LANG["peripherals"][33];
$DATA_INJECTION_INFOS[PHONE_TYPE]['is_global']['input_type']='dropdown';

// ----------------------------------------------------------------------
//PERIPHERAL INFOS
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['state']['table']='glpi_dropdown_state';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['state']['field']='name';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['state']['name']=$LANG["joblist"][0];
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['state']['linkfield']='state';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['state']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['location']['table']='glpi_dropdown_locations';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['location']['field']='name';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['location']['name']=$LANG["common"][15];
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['location']['linkfield']='location';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['location']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['FK_glpi_enterprise']['table']='glpi_dropdown_manufacturer';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['FK_glpi_enterprise']['field']='name';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['FK_glpi_enterprise']['name']=$LANG["common"][5];
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['FK_glpi_enterprise']['linkfield']='FK_enterprise';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['FK_glpi_enterprise']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['type']['table']='glpi_type_peripherals';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['type']['field']='name';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['type']['name']=$LANG["common"][17];
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['type']['linkfield']='type';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['type']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['model']['table']='glpi_dropdown_model_peripherals';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['model']['field']='name';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['model']['name']=$LANG["common"][22];
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['model']['linkfield']='model';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['model']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['FK_groups']['table']='glpi_groups';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['FK_groups']['field']='name';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['FK_groups']['name']=$LANG["common"][35];
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['FK_groups']['linkfield']='FK_groups';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['FK_groups']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['tech_num']['table']='glpi_users';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['tech_num']['field']='name';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['tech_num']['name']=$LANG["common"][10];
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['tech_num']['linkfield']='tech_num';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['tech_num']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['comments']['table']='glpi_peripherals';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['comments']['field']='comments';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['comments']['name']=$LANG["common"][25];
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['comments']['table_type']='multitext';

$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['contract']['table']='glpi_contracts';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['contract']['field']='comments';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['contract']['name']=$LANG["financial"][1];
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['contract']['input_type']='dropdown';

$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['is_global']['table']='glpi_peripherals';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['is_global']['field']='is_global';
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['is_global']['name']=$LANG["peripherals"][33];
$DATA_INJECTION_INFOS[PERIPHERAL_TYPE]['is_global']['input_type']='dropdown';

// ----------------------------------------------------------------------
//NETWORKING INFOS
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['state']['table']='glpi_dropdown_state';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['state']['field']='name';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['state']['name']=$LANG["joblist"][0];
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['state']['linkfield']='state';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['state']['input_type']='dropdown';

$DATA_INJECTION_INFOS[NETWORKING_TYPE]['location']['table']='glpi_dropdown_locations';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['location']['field']='name';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['location']['name']=$LANG["common"][15];
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['location']['linkfield']='location';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['location']['input_type']='dropdown';

$DATA_INJECTION_INFOS[NETWORKING_TYPE]['FK_glpi_enterprise']['table']='glpi_dropdown_manufacturer';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['FK_glpi_enterprise']['field']='name';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['FK_glpi_enterprise']['name']=$LANG["common"][5];
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['FK_glpi_enterprise']['linkfield']='FK_enterprise';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['FK_glpi_enterprise']['input_type']='dropdown';

$DATA_INJECTION_INFOS[NETWORKING_TYPE]['type']['table']='glpi_type_networking';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['type']['field']='name';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['type']['name']=$LANG["common"][17];
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['type']['linkfield']='type';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['type']['input_type']='dropdown';

$DATA_INJECTION_INFOS[NETWORKING_TYPE]['model']['table']='glpi_dropdown_model_networking';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['model']['field']='name';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['model']['name']=$LANG["common"][22];
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['model']['linkfield']='model';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['model']['input_type']='dropdown';

$DATA_INJECTION_INFOS[NETWORKING_TYPE]['FK_groups']['table']='glpi_groups';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['FK_groups']['field']='name';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['FK_groups']['name']=$LANG["common"][35];
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['FK_groups']['linkfield']='FK_groups';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['FK_groups']['input_type']='dropdown';

$DATA_INJECTION_INFOS[NETWORKING_TYPE]['tech_num']['table']='glpi_users';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['tech_num']['field']='name';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['tech_num']['name']=$LANG["common"][10];
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['tech_num']['linkfield']='tech_num';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['tech_num']['input_type']='dropdown';

$DATA_INJECTION_INFOS[NETWORKING_TYPE]['comments']['table']='glpi_networking';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['comments']['field']='comments';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['comments']['name']=$LANG["common"][25];
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['comments']['table_type']='multitext';

$DATA_INJECTION_INFOS[NETWORKING_TYPE]['contract']['table']='glpi_contracts';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['contract']['field']='comments';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['contract']['name']=$LANG["financial"][1];
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['contract']['input_type']='dropdown';

$DATA_INJECTION_INFOS[NETWORKING_TYPE]['template']['table']='glpi_networking';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['template']['field']='tplname';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['template']['name']=$LANG["common"][13];
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['template']['input_type']='dropdown';

$DATA_INJECTION_INFOS[NETWORKING_TYPE]['is_global']['table']='glpi_networking';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['is_global']['field']='is_global';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['is_global']['name']=$LANG["peripherals"][33];
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['is_global']['input_type']='dropdown';

$DATA_INJECTION_INFOS[NETWORKING_TYPE]['recursive']['table'] = 'glpi_networking';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['recursive']['field'] = 'recursive';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['recursive']['name'] = $LANG["entity"][9];
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['recursive']['type'] = 'integer';
$DATA_INJECTION_INFOS[NETWORKING_TYPE]['recursive']['input_type'] = 'yesno';

// ----------------------------------------------------------------------
//USER INFOS
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[USER_TYPE]['password']['table'] = 'glpi_users';
$DATA_INJECTION_INFOS[USER_TYPE]['password']['field'] = 'password';
$DATA_INJECTION_INFOS[USER_TYPE]['password']['name'] = $LANG["login"][7];
$DATA_INJECTION_INFOS[USER_TYPE]['password']['type'] = 'text';

$DATA_INJECTION_INFOS[USER_TYPE]['email']['table'] = 'glpi_users';
$DATA_INJECTION_INFOS[USER_TYPE]['email']['field'] = 'email';
$DATA_INJECTION_INFOS[USER_TYPE]['email']['name'] = $LANG["setup"][14];
$DATA_INJECTION_INFOS[USER_TYPE]['email']['type'] = 'text';
$DATA_INJECTION_INFOS[USER_TYPE]['password']['input_type']='text';

$DATA_INJECTION_INFOS[USER_TYPE]['phone']['table'] = 'glpi_users';
$DATA_INJECTION_INFOS[USER_TYPE]['phone']['field'] = 'phone';
$DATA_INJECTION_INFOS[USER_TYPE]['phone']['name'] = $LANG["help"][35];
$DATA_INJECTION_INFOS[USER_TYPE]['phone']['type'] = 'text';

$DATA_INJECTION_INFOS[USER_TYPE]['phone2']['table'] = 'glpi_users';
$DATA_INJECTION_INFOS[USER_TYPE]['phone2']['field'] = 'phone2';
$DATA_INJECTION_INFOS[USER_TYPE]['phone2']['name'] = $LANG["help"][35] . " 2";
$DATA_INJECTION_INFOS[USER_TYPE]['phone2']['type'] = 'text';

$DATA_INJECTION_INFOS[USER_TYPE]['mobile']['table'] = 'glpi_users';
$DATA_INJECTION_INFOS[USER_TYPE]['mobile']['field'] = 'mobile';
$DATA_INJECTION_INFOS[USER_TYPE]['mobile']['name'] = $LANG["common"][42];
$DATA_INJECTION_INFOS[USER_TYPE]['mobile']['type'] = 'text';

$DATA_INJECTION_INFOS[USER_TYPE]['realname']['table'] = 'glpi_users';
$DATA_INJECTION_INFOS[USER_TYPE]['realname']['field'] = 'realname';
$DATA_INJECTION_INFOS[USER_TYPE]['realname']['name'] = $LANG["common"][48];
$DATA_INJECTION_INFOS[USER_TYPE]['realname']['type'] = 'text';

$DATA_INJECTION_INFOS[USER_TYPE]['firstname']['table'] = 'glpi_users';
$DATA_INJECTION_INFOS[USER_TYPE]['firstname']['field'] = 'firstname';
$DATA_INJECTION_INFOS[USER_TYPE]['firstname']['name'] = $LANG["common"][43];
$DATA_INJECTION_INFOS[USER_TYPE]['firstname']['type'] = 'text';

$DATA_INJECTION_INFOS[USER_TYPE]['comments']['table'] = 'glpi_users';
$DATA_INJECTION_INFOS[USER_TYPE]['comments']['field'] = 'comments';
$DATA_INJECTION_INFOS[USER_TYPE]['comments']['name'] = $LANG["common"][25];
$DATA_INJECTION_INFOS[USER_TYPE]['comments']['type'] = 'text';
$DATA_INJECTION_INFOS[USER_TYPE]['comments']['input_type'] = 'multitext';

$DATA_INJECTION_INFOS[USER_TYPE]['location']['table'] = 'glpi_dropdown_locations';
$DATA_INJECTION_INFOS[USER_TYPE]['location']['field'] = 'name';
$DATA_INJECTION_INFOS[USER_TYPE]['location']['name'] = $LANG["common"][15];
$DATA_INJECTION_INFOS[USER_TYPE]['location']['linkfield'] = 'location';
$DATA_INJECTION_INFOS[USER_TYPE]['location']['type'] = 'text';
$DATA_INJECTION_INFOS[USER_TYPE]['location']['input_type'] = 'dropdown';

//This mapping needs post processing
$DATA_INJECTION_INFOS[USER_TYPE]['FK_group']['table'] = 'glpi_groups';
$DATA_INJECTION_INFOS[USER_TYPE]['FK_group']['field'] = 'name';
$DATA_INJECTION_INFOS[USER_TYPE]['FK_group']['name'] = $LANG["common"][35];
$DATA_INJECTION_INFOS[USER_TYPE]['FK_group']['type'] = 'text';
$DATA_INJECTION_INFOS[USER_TYPE]['FK_group']['table_type'] = 'dropdown';
$DATA_INJECTION_INFOS[USER_TYPE]['FK_group']['linkfield'] = 'FK_group';

//----------------------------------------------------------------------
//GROUP INFOS
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[GROUP_TYPE]['comments']['table'] = 'glpi_groups';
$DATA_INJECTION_INFOS[GROUP_TYPE]['comments']['field'] = 'comments';
$DATA_INJECTION_INFOS[GROUP_TYPE]['comments']['name'] = $LANG["common"][25];
$DATA_INJECTION_INFOS[GROUP_TYPE]['comments']['type'] = 'text';

$DATA_INJECTION_INFOS[GROUP_TYPE]['ldap_field']['table'] = 'glpi_groups';
$DATA_INJECTION_INFOS[GROUP_TYPE]['ldap_field']['field'] = 'ldap_field';
$DATA_INJECTION_INFOS[GROUP_TYPE]['ldap_field']['name'] = $LANG["setup"][260];
$DATA_INJECTION_INFOS[GROUP_TYPE]['ldap_field']['type'] = 'text';

$DATA_INJECTION_INFOS[GROUP_TYPE]['recursive']['table'] = 'glpi_groups';
$DATA_INJECTION_INFOS[GROUP_TYPE]['recursive']['field'] = 'recursive';
$DATA_INJECTION_INFOS[GROUP_TYPE]['recursive']['name'] = $LANG["entity"][9];
$DATA_INJECTION_INFOS[GROUP_TYPE]['recursive']['type'] = 'integer';
$DATA_INJECTION_INFOS[GROUP_TYPE]['recursive']['input_type'] = 'yesno';

// ----------------------------------------------------------------------
//CONTACT INFOS
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[CONTACT_TYPE]['comments']['table']='glpi_contacts';
$DATA_INJECTION_INFOS[CONTACT_TYPE]['comments']['field']='comments';
$DATA_INJECTION_INFOS[CONTACT_TYPE]['comments']['name']=$LANG["common"][25];
$DATA_INJECTION_INFOS[CONTACT_TYPE]['comments']['table_type']='multitext';

$DATA_INJECTION_INFOS[CONTACT_TYPE]['type']['table']='glpi_dropdown_contact_type';
$DATA_INJECTION_INFOS[CONTACT_TYPE]['type']['field']='name';
$DATA_INJECTION_INFOS[CONTACT_TYPE]['type']['name']=$LANG["setup"][80];
$DATA_INJECTION_INFOS[CONTACT_TYPE]['type']['type']='text';
$DATA_INJECTION_INFOS[CONTACT_TYPE]['type']['linkfield']='type';
$DATA_INJECTION_INFOS[CONTACT_TYPE]['type']['input_type']='dropdown';

$DATA_INJECTION_INFOS[CONTACT_TYPE]['recursive']['table'] = 'glpi_enterprises';
$DATA_INJECTION_INFOS[CONTACT_TYPE]['recursive']['field'] = 'recursive';
$DATA_INJECTION_INFOS[CONTACT_TYPE]['recursive']['name'] = $LANG["entity"][9];
$DATA_INJECTION_INFOS[CONTACT_TYPE]['recursive']['type'] = 'integer';
$DATA_INJECTION_INFOS[CONTACT_TYPE]['recursive']['input_type'] = 'yesno';

// ----------------------------------------------------------------------
//ENTERPRISES INFOS
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['notes']['table']='glpi_enterprises';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['notes']['field']='notes';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['notes']['name']=$LANG["title"][37];
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['notes']['type']='text';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['notes']['table_type']='multitext';

$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['comments']['table']='glpi_enterprises';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['comments']['field']='comments';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['comments']['name']=$LANG["common"][25];
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['comments']['type']='text';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['comments']['table_type']='multitext';

$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['type']['table']='glpi_dropdown_enttype';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['type']['field']='name';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['type']['name']=$LANG["setup"][80];
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['type']['type']='text';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['type']['linkfield']='type';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['type']['input_type']='dropdown';

$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['contract']['table']='glpi_contracts';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['contract']['field']='name';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['contract']['name']=$LANG["financial"][1];
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['contract']['type']='text';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['contract']['linkfield']='contract';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['contract']['input_type']='dropdown';

$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['contact']['table']='glpi_contacts';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['contact']['field']='name';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['contact']['name']=$LANG["common"][18];
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['contact']['type']='text';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['contact']['linkfield']='contact';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['contact']['input_type']='dropdown';

$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['recursive']['table'] = 'glpi_enterprises';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['recursive']['field'] = 'recursive';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['recursive']['name'] = $LANG["entity"][9];
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['recursive']['type'] = 'integer';
$DATA_INJECTION_INFOS[ENTERPRISE_TYPE]['recursive']['input_type'] = 'yesno';

// ----------------------------------------------------------------------
//CONSUMABLE INFOS
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['notes']['table']='glpi_consumables_type';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['notes']['field']='notes';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['notes']['name']=$LANG["title"][37];
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['notes']['type']='text';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['notes']['table_type']='multitext';

$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['comments']['table']='glpi_consumables_type';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['comments']['field']='comments';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['comments']['name']=$LANG["common"][25];
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['comments']['type']='text';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['comments']['table_type']='multitext';

$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['type']['table']='glpi_dropdown_consumable_type';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['type']['field']='name';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['type']['name']=$LANG["setup"][80];
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['type']['type']='text';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['type']['linkfield']='type';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['type']['input_type']='dropdown';

$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['tech_num']['table']='glpi_users';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['tech_num']['field']='name';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['tech_num']['name']=$LANG["common"][10];
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['tech_num']['linkfield']='tech_num';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['tech_num']['input_type']='dropdown';

$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['FK_glpi_enterprise']['table']='glpi_dropdown_manufacturer';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['FK_glpi_enterprise']['field']='name';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['FK_glpi_enterprise']['name']=$LANG["common"][5];
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['FK_glpi_enterprise']['linkfield']='FK_enterprise';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['FK_glpi_enterprise']['input_type']='dropdown';

$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['alarm']['table']='glpi_consumables_type';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['alarm']['field']='alarm';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['alarm']['name']=$LANG["consumables"][38];
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['alarm']['linkfield']='FK_enterprise';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['alarm']['input_type']='dropdown';

$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['location']['table']='glpi_dropdown_locations';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['location']['field']='name';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['location']['name']=$LANG["common"][15];
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['location']['linkfield']='location';
$DATA_INJECTION_INFOS[CONSUMABLE_TYPE]['location']['input_type']='dropdown';

// ----------------------------------------------------------------------
//CARTRIDGE INFOS
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['notes']['table']='glpi_cartridges_type';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['notes']['field']='notes';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['notes']['name']=$LANG["title"][37];
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['notes']['type']='text';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['notes']['table_type']='multitext';

$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['comments']['table']='glpi_cartridges_type';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['comments']['field']='comments';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['comments']['name']=$LANG["common"][25];
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['comments']['type']='text';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['comments']['table_type']='multitext';

$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['type']['table']='glpi_dropdown_cartridge_type';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['type']['field']='name';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['type']['name']=$LANG["setup"][80];
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['type']['type']='text';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['type']['linkfield']='type';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['type']['input_type']='dropdown';

$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['tech_num']['table']='glpi_users';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['tech_num']['field']='name';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['tech_num']['name']=$LANG["common"][10];
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['tech_num']['linkfield']='tech_num';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['tech_num']['input_type']='dropdown_users';

$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['FK_glpi_enterprise']['table']='glpi_dropdown_manufacturer';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['FK_glpi_enterprise']['field']='name';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['FK_glpi_enterprise']['name']=$LANG["common"][5];
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['FK_glpi_enterprise']['linkfield']='FK_enterprise';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['FK_glpi_enterprise']['input_type']='dropdown';

$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['alarm']['table']='glpi_cartridges_type';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['alarm']['field']='alarm';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['alarm']['name']=$LANG["consumables"][38];
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['alarm']['linkfield']='FK_enterprise';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['alarm']['input_type']='dropdown';

$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['location']['table']='glpi_dropdown_locations';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['location']['field']='name';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['location']['name']=$LANG["common"][15];
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['location']['linkfield']='location';
$DATA_INJECTION_INFOS[CARTRIDGE_TYPE]['location']['input_type']='dropdown';

// ----------------------------------------------------------------------
//DOCUMENTS MAPPING
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['comments']['table'] = 'glpi_docs';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['comments']['field'] = 'comments';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['comments']['name'] = $LANG["common"][25];
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['comments']['type'] = 'text';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['comments']['input_type'] = 'multitext';

$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['notes']['table'] = 'glpi_docs';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['notes']['field'] = 'notes';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['notes']['name'] = $LANG["title"][37];
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['notes']['input_type'] = 'multitext';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['notes']['type'] = 'text';

$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['FK_users']['table'] = 'glpi_users';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['FK_users']['field'] = 'name';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['FK_users']['name'] = $LANG["common"][34];
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['FK_users']['linkfield'] = 'FK_users';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['FK_users']['type'] = 'text';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['FK_users']['input_type'] = 'dropdown_users';

$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['recursive']['table'] = 'glpi_contracts';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['recursive']['field'] = 'recursive';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['recursive']['name'] = $LANG["entity"][9];
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['recursive']['type'] = 'integer';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['recursive']['input_type'] = 'yesno';

$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['rubrique']['table'] = 'glpi_dropdown_rubdocs';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['rubrique']['field'] = 'name';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['rubrique']['name'] = $LANG["document"][3];
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['rubrique']['linkfield'] = 'rubrique';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['rubrique']['type'] = 'text';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['rubrique']['input_type'] = 'dropdown';

$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['mime']['table'] = 'glpi_docs';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['mime']['field'] = 'mime';
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['mime']['name'] = $LANG['document'][4];
$DATA_INJECTION_INFOS[DOCUMENT_TYPE]['mime']['type'] = 'text';

// ----------------------------------------------------------------------
//SOFTWARE MAPPING
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['name']['table'] = 'glpi_software';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['name']['field'] = 'name';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['name']['name'] = $LANG["common"][16];
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['name']['type'] = 'text';

$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['comments']['table'] = 'glpi_software';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['comments']['field'] = 'comments';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['comments']['name'] = $LANG["common"][25];
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['comments']['type'] = 'text';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['comments']['input_type'] = 'multitext';

$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['location']['table'] = 'glpi_dropdown_locations';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['location']['field'] = 'name';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['location']['name'] = $LANG["common"][15];
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['location']['linkfield'] = 'location';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['location']['type'] = 'text';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['location']['input_type'] = 'dropdown';

$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['manufacturer']['table'] = 'glpi_dropdown_manufacturer';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['manufacturer']['field'] = 'name';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['manufacturer']['name'] = $LANG["common"][5];
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['manufacturer']['type'] = 'text';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['manufacturer']['linkfield'] = 'FK_glpi_enterprise';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['manufacturer']['input_type'] = 'dropdown';

$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['tech_num']['table'] = 'glpi_users';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['tech_num']['field'] = 'name';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['tech_num']['name'] = $LANG["common"][10];
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['tech_num']['linkfield'] = 'tech_num';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['tech_num']['type'] = 'text';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['tech_num']['input_type'] = 'dropdown_users';

$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['recursive']['table'] = 'glpi_software';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['recursive']['field'] = 'recursive';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['recursive']['name'] = $LANG["entity"][9];
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['recursive']['type'] = 'integer';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['recursive']['input_type'] = 'yesno';

$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['platform']['table'] = 'glpi_dropdown_os';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['platform']['field'] = 'name';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['platform']['name'] = $LANG['software'][3];
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['platform']['linkfield'] = 'platform';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['platform']['input_type'] = 'dropdown';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['platform']['type'] = 'text';

$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['is_template']['table'] = 'glpi_software';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['is_template']['field'] = 'is_template';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['is_template']['name'] = $LANG["rulesengine"][0] . " " . $LANG["common"][13] . " ?";
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['is_template']['type'] = 'integer';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['is_template']['input_type'] = 'yesno';

$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['tplname']['table'] = 'glpi_software';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['tplname']['field'] = 'tplname';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['tplname']['name'] = $LANG["common"][6];
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['tplname']['type'] = 'text';

$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['notes']['table'] = 'glpi_software';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['notes']['field'] = 'notes';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['notes']['name'] = $LANG["title"][37];
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['notes']['input_type'] = 'multitext';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['notes']['type'] = 'text';

$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['helpdesk_visible']['table'] = 'glpi_software';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['helpdesk_visible']['field'] = 'helpdesk_visible';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['helpdesk_visible']['name'] = $LANG['software'][46];
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['helpdesk_visible']['type'] = 'integer';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['helpdesk_visible']['input_type'] = 'yesno';

$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['FK_users']['table'] = 'glpi_users';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['FK_users']['field'] = 'name';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['FK_users']['name'] = $LANG["common"][34];
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['FK_users']['linkfield'] = 'FK_users';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['FK_users']['type'] = 'text';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['FK_users']['input_type'] = 'dropdown_users';

$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['FK_groups']['table'] = 'glpi_groups';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['FK_groups']['field'] = 'name';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['FK_groups']['name'] = $LANG["common"][35];
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['FK_groups']['linkfield'] = 'FK_groups';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['FK_groups']['type'] = 'text';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['FK_groups']['input_type'] = 'dropdown';

$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['category']['table'] = 'glpi_dropdown_software_category';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['category']['field'] = 'name';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['category']['name'] = $LANG['common'][36];
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['category']['linkfield'] = 'category';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['category']['type'] = 'text';
$DATA_INJECTION_INFOS[SOFTWARE_TYPE]['category']['input_type'] = 'dropdown';

// ----------------------------------------------------------------------
//SOFTWARE VERSION MAPPING
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['name']['table'] = 'glpi_softwareversions';
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['name']['field'] = 'name';
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['name']['name'] = $LANG['rulesengine'][78];
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['name']['type'] = 'text';

$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['state']['table'] = 'glpi_dropdown_state';
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['state']['field'] = 'name';
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['state']['name'] = $LANG["joblist"][0];
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['state']['linkfield'] = 'state';
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['state']['input_type'] = 'dropdown';
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['state']['type'] = 'text';

$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['sID']['table'] = 'glpi_software';
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['sID']['field'] = 'name';
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['sID']['name'] = $LANG['help'][31];
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['sID']['linkfield'] = 'sID';
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['sID']['input_type'] = 'single';
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['sID']['type'] = 'text';

$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['comments']['table'] = 'glpi_softwareversions';
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['comments']['field'] = 'comments';
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['comments']['name'] = $LANG["common"][25];
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['comments']['type'] = 'text';
$DATA_INJECTION_INFOS[SOFTWAREVERSION_TYPE]['comments']['input_type'] = 'multitext';

// ----------------------------------------------------------------------
//SOFTWARE LICENSE MAPPING
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['name']['table'] = 'glpi_softwarelicenses';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['name']['field'] = 'name';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['name']['name'] = $LANG['common'][16];
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['name']['type'] = 'text';

$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['sID']['table'] = 'glpi_software';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['sID']['field'] = 'name';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['sID']['name'] = $LANG['help'][31];
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['sID']['linkfield'] = 'sID';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['sID']['input_type'] = 'single';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['sID']['type'] = 'text';

$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['recursive']['table'] = 'glpi_softwarelicenses';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['recursive']['field'] = 'recursive';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['recursive']['name'] = $LANG["entity"][9];
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['recursive']['type'] = 'integer';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['recursive']['input_type'] = 'yesno';

$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['comments']['table'] = 'glpi_softwarelicenses';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['comments']['field'] = 'comments';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['comments']['name'] = $LANG["common"][25];
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['comments']['type'] = 'text';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['comments']['input_type'] = 'multitext';

$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['type']['table'] = 'glpi_dropdown_licensetypes';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['type']['field'] = 'name';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['type']['name'] = $LANG['common'][17];
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['type']['linkfield'] = 'type';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['type']['input_type'] = 'dropdown';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['type']['type'] = 'text';

$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['number']['table'] = 'glpi_softwarelicenses';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['number']['field'] = 'number';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['number']['name'] = $LANG['tracking'][29];
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['number']['type'] = 'integer';

$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['serial']['table'] = 'glpi_softwarelicenses';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['serial']['field'] = 'serial';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['serial']['name'] = $LANG["common"][19];
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['serial']['type'] = 'text';

$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['otherserial']['table'] = 'glpi_softwarelicenses';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['otherserial']['field'] = 'otherserial';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['otherserial']['name'] = $LANG["common"][20];
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['otherserial']['type'] = 'text';

$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['expire']['table'] = 'glpi_softwarelicenses';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['expire']['field'] = 'expire';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['expire']['name'] = $LANG['software'][32];
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['expire']['type'] = 'date';
$DATA_INJECTION_INFOS[SOFTWARELICENSE_TYPE]['expire']['input_type'] = 'date';

// ----------------------------------------------------------------------
//KB MAPPING
// ----------------------------------------------------------------------

$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['recursive']['table'] = 'glpi_kbitems';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['recursive']['field'] = 'recursive';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['recursive']['name'] = $LANG["entity"][9];
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['recursive']['input_type'] = 'yesno';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['recursive']['type'] = 'integer';

$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['categoryID']['table'] = 'glpi_dropdown_kbcategories';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['categoryID']['field'] = 'name';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['categoryID']['name'] = $LANG['common'][36];
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['categoryID']['linkfield'] = 'categoryID';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['categoryID']['type'] = 'text';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['categoryID']['input_type'] = 'dropdown';

$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['faq']['table'] = 'glpi_kbitems';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['faq']['field'] = 'faq';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['faq']['name'] = $LANG['knowbase'][5];
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['faq']['type'] = 'integer';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['faq']['input_type'] = 'yesno';

$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['view']['table'] = 'glpi_kbitems';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['view']['field'] = 'view';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['view']['name'] = $LANG['knowbase'][26];
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['view']['input_type'] = 'text';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['view']['type'] = 'integer';

$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['author']['table'] = 'glpi_users';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['author']['field'] = 'name';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['author']['name'] = $LANG['common'][37];
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['author']['linkfield'] = 'author';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['author']['type'] = 'text';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['author']['input_type'] = 'dropdown_users';

$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['date']['table'] = 'glpi_kbitems';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['date']['field'] = 'date';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['date']['name'] = $LANG['cartridges'][24];
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['date']['input_type'] = 'date';
$DATA_INJECTION_INFOS[KNOWBASE_TYPE]['date']['type'] = 'date';

// ----------------------------------------------------------------------
//PSEUDO TYPE FOR PERIPHERAL TO COMPUTER CONNECTION
// ----------------------------------------------------------------------
$DATA_INJECTION_INFOS[COMPUTER_CONNECTION_TYPE]['computer_id']['table']='glpi_computers';
$DATA_INJECTION_INFOS[COMPUTER_CONNECTION_TYPE]['computer_id']['field']='name';
$DATA_INJECTION_INFOS[COMPUTER_CONNECTION_TYPE]['computer_id']['name']=$LANG["common"][16];
$DATA_INJECTION_INFOS[COMPUTER_CONNECTION_TYPE]['computer_id']['input_type']='dropdown';

// ----------------------------------------------------------------------
//COMPONENTS
// ----------------------------------------------------------------------

function addDeviceSpecificInfos() {
	global $DEVICES_TYPES_STRING, $DATA_INJECTION_INFOS, $LANG;
	foreach ($DEVICES_TYPES_STRING as $name => $infos) {
		$DATA_INJECTION_INFOS[$infos["ID"]]['designation']['table'] = $infos["table"];
		$DATA_INJECTION_INFOS[$infos["ID"]]['designation']['field'] = 'designation';
		$DATA_INJECTION_INFOS[$infos["ID"]]['designation']['name'] = $LANG["common"][16];
		$DATA_INJECTION_INFOS[$infos["ID"]]['designation']['input_type'] = 'text';

		$DATA_INJECTION_INFOS[$infos["ID"]]['manufacturer']['table'] = 'glpi_dropdown_manufacturer';
		$DATA_INJECTION_INFOS[$infos["ID"]]['manufacturer']['field'] = 'name';
		$DATA_INJECTION_INFOS[$infos["ID"]]['manufacturer']['name'] = $LANG["common"][5];
		$DATA_INJECTION_INFOS[$infos["ID"]]['manufacturer']['linkfield'] = 'FK_glpi_enterprise';
		$DATA_INJECTION_INFOS[$infos["ID"]]['manufacturer']['input_type'] = 'dropdown';

		$DATA_INJECTION_INFOS[$infos["ID"]]['comments']['table'] = $infos["table"];
		$DATA_INJECTION_INFOS[$infos["ID"]]['comments']['field'] = 'comments';
		$DATA_INJECTION_INFOS[$infos["ID"]]['comments']['name'] = $LANG["common"][25];
		$DATA_INJECTION_INFOS[$infos["ID"]]['comments']['input_type'] = 'multitext';

		switch ($infos["ID"]) {
			case PLUGIN_DATA_INJECTION_MOBOARD_DEVICE_TYPE :
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_MOBOARD_DEVICE_TYPE]['chipset']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_MOBOARD_DEVICE_TYPE]['chipset']['field'] = 'chipset';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_MOBOARD_DEVICE_TYPE]['chipset']['name'] = $LANG["device_moboard"][0];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_MOBOARD_DEVICE_TYPE]['chipset']['input_type'] = 'text';
				break;
			case PLUGIN_DATA_INJECTION_GFX_DEVICE_TYPE :
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_GFX_DEVICE_TYPE]['interface']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_GFX_DEVICE_TYPE]['interface']['field'] = 'interface';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_GFX_DEVICE_TYPE]['interface']['name'] = $LANG["common"][65];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_GFX_DEVICE_TYPE]['interface']['input_type'] = 'text';
				break;
			case PLUGIN_DATA_INJECTION_PROCESSOR_DEVICE_TYPE :
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_PROCESSOR_DEVICE_TYPE]['frequence']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_PROCESSOR_DEVICE_TYPE]['frequence']['field'] = 'frequence';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_PROCESSOR_DEVICE_TYPE]['frequence']['name'] = $LANG["device_ram"][1];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_PROCESSOR_DEVICE_TYPE]['frequence']['input_type'] = 'text';
				break;
			case PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE :
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE]['frequence']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE]['frequence']['field'] = 'frequence';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE]['frequence']['name'] = $LANG["device_ram"][1];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE]['frequence']['input_type'] = 'text';

				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE]['type']['table'] = "glpi_dropdown_ram_type";
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE]['type']['field'] = 'name';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE]['type']['name'] = $LANG["common"][17];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE]['type']['type'] = 'text';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE]['type']['linkfield'] = 'type';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE]['type']['input_type'] = 'dropdown';

				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE]['specific_default']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE]['specific_default']['field'] = 'specific_default';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE]['specific_default']['name'] = $LANG["device_ram"][2];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_RAM_DEVICE_TYPE]['specific_default']['input_type'] = 'text';
				break;
			case PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE :
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['rpm']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['rpm']['field'] = 'rpm';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['rpm']['name'] = $LANG["device_hdd"][0];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['rpm']['input_type'] = 'text';

				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['cache']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['cache']['field'] = 'cache';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['cache']['name'] = $LANG["device_hdd"][1];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['cache']['input_type'] = 'text';

				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['specific_default']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['specific_default']['field'] = 'specific_default';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['specific_default']['name'] = $LANG["device_hdd"][4];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['specific_default']['input_type'] = 'text';
				break;
			case PLUGIN_DATA_INJECTION_NETWORK_DEVICE_TYPE :
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_NETWORK_DEVICE_TYPE]['rpm']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_NETWORK_DEVICE_TYPE]['rpm']['field'] = 'bandwith';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_NETWORK_DEVICE_TYPE]['rpm']['name'] = $LANG["device_iface"][0];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_NETWORK_DEVICE_TYPE]['rpm']['input_type'] = 'text';

				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['specific_default']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['specific_default']['field'] = 'specific_default';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['specific_default']['name'] = $LANG["device_iface"][0];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_HDD_DEVICE_TYPE]['specific_default']['input_type'] = 'mac';
				break;
			case PLUGIN_DATA_INJECTION_DRIVE_DEVICE_TYPE :
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_DRIVE_DEVICE_TYPE]['is_writer']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_DRIVE_DEVICE_TYPE]['is_writer']['field'] = 'is_writer';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_DRIVE_DEVICE_TYPE]['is_writer']['name'] = $LANG["device_drive"][0];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_DRIVE_DEVICE_TYPE]['is_writer']['input_type'] = 'integer';

				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_DRIVE_DEVICE_TYPE]['speed']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_DRIVE_DEVICE_TYPE]['speed']['field'] = 'speed';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_DRIVE_DEVICE_TYPE]['speed']['name'] = $LANG["device_drive"][1];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_DRIVE_DEVICE_TYPE]['speed']['input_type'] = 'text';

				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_DRIVE_DEVICE_TYPE]['interface']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_DRIVE_DEVICE_TYPE]['interface']['field'] = 'interface';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_DRIVE_DEVICE_TYPE]['interface']['name'] = $LANG["common"][65];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_DRIVE_DEVICE_TYPE]['interface']['input_type'] = 'text';
				break;
			case PLUGIN_DATA_INJECTION_CONTROL_DEVICE_TYPE :
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_CONTROL_DEVICE_TYPE]['raid']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_CONTROL_DEVICE_TYPE]['raid']['field'] = 'raid';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_CONTROL_DEVICE_TYPE]['raid']['name'] = $LANG["device_control"][0];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_CONTROL_DEVICE_TYPE]['raid']['input_type'] = 'integer';

				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_CONTROL_DEVICE_TYPE]['interface']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_CONTROL_DEVICE_TYPE]['interface']['field'] = 'interface';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_CONTROL_DEVICE_TYPE]['interface']['name'] = $LANG["common"][65];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_CONTROL_DEVICE_TYPE]['interface']['input_type'] = 'text';
				break;
			case PLUGIN_DATA_INJECTION_GFX_DEVICE_TYPE :
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_GFX_DEVICE_TYPE]['interface']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_GFX_DEVICE_TYPE]['interface']['field'] = 'interface';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_GFX_DEVICE_TYPE]['interface']['name'] = $LANG["common"][65];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_GFX_DEVICE_TYPE]['interface']['input_type'] = 'text';

				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_GFX_DEVICE_TYPE]['specific_default']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_GFX_DEVICE_TYPE]['specific_default']['field'] = 'specific_default';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_GFX_DEVICE_TYPE]['specific_default']['name'] = $LANG["device_gfxcard"][0];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_GFX_DEVICE_TYPE]['specific_default']['input_type'] = 'mac';
				break;
			case PLUGIN_DATA_INJECTION_SND_DEVICE_TYPE :
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_SND_DEVICE_TYPE]['type']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_SND_DEVICE_TYPE]['type']['field'] = 'type';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_SND_DEVICE_TYPE]['type']['name'] = $LANG["common"][17];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_SND_DEVICE_TYPE]['type']['input_type'] = 'text';
				break;
			case PLUGIN_DATA_INJECTION_PCI_DEVICE_TYPE :
				break;
			case PLUGIN_DATA_INJECTION_CASE_DEVICE_TYPE :
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_CASE_DEVICE_TYPE]['type']['table'] = "glpi_dropdown_case_type";
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_CASE_DEVICE_TYPE]['type']['field'] = 'name';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_CASE_DEVICE_TYPE]['type']['name'] = $LANG["device_case"][0];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_CASE_DEVICE_TYPE]['type']['type'] = 'text';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_CASE_DEVICE_TYPE]['type']['linkfield'] = 'type';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_CASE_DEVICE_TYPE]['type']['input_type'] = 'dropdown';
				break;
			case PLUGIN_DATA_INJECTION_POWER_DEVICE_TYPE :
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_POWER_DEVICE_TYPE]['power']['table'] = $infos["table"];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_POWER_DEVICE_TYPE]['power']['field'] = 'power';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_POWER_DEVICE_TYPE]['power']['name'] = $LANG["device_power"][0];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_POWER_DEVICE_TYPE]['power']['input_type'] = 'text';

				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_POWER_DEVICE_TYPE]['atx']['table'] = "glpi_dropdown_power_type";
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_POWER_DEVICE_TYPE]['atx']['field'] = 'name';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_POWER_DEVICE_TYPE]['atx']['name'] = $LANG["device_power"][1];
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_POWER_DEVICE_TYPE]['atx']['linkfield'] = 'atx';
				$DATA_INJECTION_INFOS[PLUGIN_DATA_INJECTION_POWER_DEVICE_TYPE]['atx']['input_type'] = 'dropdown';
				break;
		}
	}
}
?>
