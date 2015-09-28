<div id="member-profile-container">

  <h2>Member Profile</h2>
  
  <div id="avatar-container" class="pull-left">
    <img src="<?php echo get_member_profile_data('avatar'); ?>" class="member-profile-image">
    <p><a href="">update photo</a></p>
    <p><a href="">edit profile</a></p>
  </div>

  <p><span>Name:</span> <?php echo get_member_profile_data('name'); ?></p>
  <p><span>Member Since:</span> <?php echo get_member_profile_data('join_date'); ?></p>
  <p><span>User Name:</span> <?php echo get_member_profile_data('username'); ?></p>
  <p><span>Email Address:</span> <?php echo get_member_profile_data('email'); ?></p>

</div>