<?php 

function set_member_profile_data() {

  $member_profile_data = array();



    



  return $member_profile_data;

}

function get_member_profile_data($field) {
  
  $member_profile_data['avatar'] = ""; //get_user_meta for field that stores URL to avatar image

  $member_profile_data['name'] = "Christopher Pittman Jr"; //$core->user->get_name();

  $member_profile_data['join_date'] = "August 10, 2012"; //join date is the earliest of all subscriptions startDates

  $member_profile_data['username'] = "pittman53400"; // $core->user->get_username();

  $member_profile_data['email'] = "cpittman@oxfordclub.com"; // $core->user->_get_email();

  return $member_profile_data[$field];

}