<?php 
if (isset($_POST['form-name'])) {
	echo '<h2>Llego por el formulario mag</h2>';

	if (isset($_POST['checkbox1'])) { echo 'Checkbox 1: ' . $_POST['checkbox1'] . ' <br/>'; }
	if (isset($_POST['checkbox2'])) { echo 'Checkbox 2: ' . $_POST['checkbox2'] . ' <br/>'; }
	if (isset($_POST['checkbox3'])) { echo 'Checkbox 3: ' . $_POST['checkbox3'] . ' <br/>'; }
	if (isset($_POST['checkbox4'])) { echo 'Checkbox 4: ' . $_POST['checkbox4'] . ' <br/>'; }
	if (isset($_POST['checkbox5'])) { echo 'Checkbox 5: ' . $_POST['checkbox5'] . ' <br/>'; }
	if (isset($_POST['checkbox6'])) { echo 'Checkbox 6: ' . $_POST['checkbox6'] . ' <br/>'; }
	if (isset($_POST['checkbox7'])) { echo 'Checkbox 7: ' . $_POST['checkbox7'] . ' <br/>'; }
	if (isset($_POST['checkbox8'])) { echo 'Checkbox 8: ' . $_POST['checkbox8'] . ' <br/>'; }

} else {
	echo '<h2>Llego por otro lado</h2>';
}

