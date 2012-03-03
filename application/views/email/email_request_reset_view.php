<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * email_request_reset_view
 * 
 * confirmation link to reset password.
 * 
 * @license		http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @author		Mike Funk
 * @link		http://mikefunk.com
 * @email		mike@mikefunk.com
 * 
 * @file		email_request_reset_view.php
 * @version		1.1.0
 * @date		02/26/2012
 * 
 * Copyright (c) 2012
 */

// --------------------------------------------------------------------------
?>
<h1>Bookymark: Request to reset password</h1>
<p>You have requested to reset your password. To confirm your request, click this <a href="<?=$confirm_reset_url?>" target="_blank">confirmation link</a>. If you do not wish to reset your password, simply take no action.</p>
<?php
/* End of file email_request_reset_view.php */
/* Location: ./bookymark/application/views/email/email_request_reset_view.php */