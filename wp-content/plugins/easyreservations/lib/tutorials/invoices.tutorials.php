<?php
	function easyreservations_invoice_tutorial(){
		$handler = array('#idmaintemplate', '#idguesttemplate', '#idtags', '#idinvoicenr', '#idthetabs', '#upload_area');
		$content = array(
				'<h3>Main Invoice Template</h3><p>Your Invoices get generated by the templates you can define below. The template you select here will be automatically loaded into the invoice editor that pops up for admins.</p>',
				'<h3>Guest Invoice Template</h3><p>This template will be used for the email attachments and in the user control panel.</p>',
				'<h3>Overall available tags</h3><p>This information tags are available in every field of the templates. At Invoice generation the [tags] get replaced by the information.</p>',
				'<h3>Invoice Numbers</h3><p>This number will be the invoice number of the next generated Invoice. It will higher once per reservation.</p>',
				'<h3>Templates Navigation</h3><p>Select your invoice templates to edit them. You can add unlimited templates.</p>',
				'<h3>Logo</h3><p>Click here to upload a logo. The image quality wont be perfect. You can try to improve it by changing the size or crop it better.</p>'
		);
		$offset = array('-35 0', '-75 0', '-75 0', '-75 0', '-75 0', '-75 0');
		$at = array('top', 'top', 'top', 'top', 'top', 'top');
		echo easyreservations_execute_pointer(6, $handler, $content, $offset, $at);
	}
?>