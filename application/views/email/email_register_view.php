<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * email_register_view
 * 
 * The registration confirmation link email.
 * 
 * @license		http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @author		Mike Funk
 * @link		http://mikefunk.com
 * @email		mike@mikefunk.com
 * 
 * @file		email_register_view.php
 * @version		1.2.0
 * @date		03/11/2012
 */

// --------------------------------------------------------------------------
?>
<h1>Bookymark Registration</h1>
<p>Thank you for registering for Bookymark. To complete your registration, please click this <a href="<?=$confirm_register_url?>" target="_blank">registration link</a>.</p>
<?php
/* End of file email_register_view.php */
/* Location: ./bookymark/application/views/email/email_register_view.php */