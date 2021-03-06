<?php
	function easyreservations_form_tutorial() {
		$handler = array('#wpbody a.current','input[name="formname"]', 'select[name="jumpmenu"]', '#idtimes', '#idlang', '#idcustom', '#idprices', '#idhidden');
		$content = array(
				'<h3>Forms</h3><p>With forms you get the reservations informations from you guests. You can implement them to pages or posts with a <b>[shortcode]</b>.They get get generated by the templates you can define below.</p>',
				'<h3>Templates</h3><p>You can add unlimited form templates. This is very helpful to realize forms only for a resource or an offer. HTML is supported in forms.<p>',
				'<h3>Add tags</h3><p>With this select you can add the [tags] to your forms template that gets replaced by form fields or informations. You can define the common HTML attributes for the form fields.</p>',
				'<h3>Billing units</h3><p>This select will allow your guests to select the hours/days/weeks to reservate as of the resources billing unit setting. Its an alternative to the departures field <code class="codecolor">[date-to]</code> and they cant be used together.</p>',
				'<h3>Multilingual</h3><p>Use this tag to add multilingual content to your forms, emails subjects, messages and the searchForm bar. Just generate it here and copy it. It have a standard content if the none of the setted languages is active and one attribute for every language you set up. Example: <b>[lang value="Hello" en_EN="Hello" de_DE="Hallo" fr_FR="Bonjour"]</b></p>',
				'<h3>Custom fields</h3><p>This tag is to gather custom information. That can happen by the form types text fields, text areas, radio buttons, selects or checkboxes. They can be required.</p>',
				'<h3>Custom prices</h3><p>Much like the custom fields, but with an impact on the price calculation. They can be radio buttons, selects or checkboxes. The amount can be multiplied by persons, times or both. They can even have conditional statements for resoruce, persons or times. <a target="_blank" href="http://easyreservations.org/kb/price-fields/">Tutorial</a></p>',
				'<h3>Hidden fields</h3><p>Hidden fields are to fix an informaton to a form for the system, but hiding it from the guest. Can be helpful if you want to make a form only for a certain resource or a date, set the arrival/departure time for all reservations or fixing the number of adults.</p>'
		);
		$offset = array('-75 0', '-75 0', '-75 0', '-75 0', '-75 0', '-75 0', '-75 0', '-75 0');
		$at = array('top', 'top', 'top', 'top', 'top', 'top', 'top', 'top');

		echo easyreservations_execute_pointer(8, $handler, $content, $offset, $at);
	}
?>