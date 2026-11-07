<?php
require(__DIR__ . '/../../../config.php');

require_login();

$title = get_string('pluginname', 'local_fundus');
$PAGE->set_url(new moodle_url('/local/fundus/index.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title($title);
$PAGE->set_heading($title);

echo $OUTPUT->header();
echo $OUTPUT->notification(get_string('hellomessage', 'local_fundus'), 'success');
echo $OUTPUT->footer();
