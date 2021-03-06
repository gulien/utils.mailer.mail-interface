<?php
namespace Mouf\Utils\Mailer;

/**
 * Objects implementing this interface represent an attachement in a mail.
 *
 */
interface MailAttachmentInterface {
	
	/**
	 * Returns the content of the file to attach, as an octet stream.
	 *
	 * @return string
	 */
	public function getFileContent();
	
	/**
	 * Returns the name of the file in the mail
	 *
	 * @return string
	 */
	public function getFileName();
	
	/**
	 * Returns the mime-type of the attachement
	 *
	 * @return string
	 */
	public function getMimeType();
	
	/**
	 * Returns the encoding.
	 * Can be one of: "ENCODING_7BIT", "ENCODING_8BIT", "ENCODING_QUOTEDPRINTABLE", "ENCODING_BASE64"
	 * 
	 * @return string
	 */
	public function getEncoding();
	
	/**
	 * Returns the attachement disposition.
	 * Can be one of: "attachment", "inline"
	 *
	 * @return string
	 */
	public function getAttachmentDisposition();
	
	/**
	 * Returns the content-id of the mail attachment.
	 * The content-id is required if you want to embed an image in a mail.
	 * If so, you will use the syntax: <img src="cid:XXX" /> to display the image.
	 * 
	 * @return string
	 */
	public function getContentId();
}
?>