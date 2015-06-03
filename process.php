<?php 
if (isset($_POST['form-name'])) {
	echo '<h2>Llego por el formulario mag</h2>';

	if (isset($_POST['checkbox-1'])) { echo 'Checkbox 1: ' . $_POST['checkbox-1'] . ' <br/>'; }
	if (isset($_POST['checkbox-2'])) { echo 'Checkbox 2: ' . $_POST['checkbox-2'] . ' <br/>'; }
	if (isset($_POST['checkbox-3'])) { echo 'Checkbox 3: ' . $_POST['checkbox-3'] . ' <br/>'; }
	if (isset($_POST['checkbox-4'])) { echo 'Checkbox 4: ' . $_POST['checkbox-4'] . ' <br/>'; }
	if (isset($_POST['checkbox-5'])) { echo 'Checkbox 5: ' . $_POST['checkbox-5'] . ' <br/>'; }
	if (isset($_POST['checkbox-6'])) { echo 'Checkbox 6: ' . $_POST['checkbox-6'] . ' <br/>'; }
	if (isset($_POST['checkbox-7'])) { echo 'Checkbox 7: ' . $_POST['checkbox-7'] . ' <br/>'; }
	if (isset($_POST['checkbox-8'])) { echo 'Checkbox 8: ' . $_POST['checkbox-8'] . ' <br/>'; }
	if (isset($_POST['checkbox-9'])) { echo 'Checkbox 9: ' . $_POST['checkbox-9'] . ' <br/>'; }
	if (isset($_POST['checkbox-10'])) { echo 'Checkbox 10: ' . $_POST['checkbox-10'] . ' <br/>'; }

} else {
	echo '<h2>Llego por otro lado</h2>';
}

