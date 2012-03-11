<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * email_confirm_reset_view
 * 
 * The content portion of the new password email.
 * 
 * @license		http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @author		Mike Funk
 * @link		http://mikefunk.com
 * @email		mike@mikefunk.com
 * 
 * @file		email_confirm_reset_view.php
 * @version		1.1.0
 * @date		02/26/2012
 * 
 * Copyright (c) 2012
 */

// --------------------------------------------------------------------------
?>
<h1>Bookymark: New password</h1>
<p>You have requested to reset your password and confirmed your request. Your new password is <strong><?=$new_password?></strong>. Please login with it <a href="<?=base_url().'auth/login'?>">here</a>.</p>
<?php
/* End of file email_confirm_reset_view.php */
/* Location: ./bookymark/application/views/email/email_confirm_reset_view.php */