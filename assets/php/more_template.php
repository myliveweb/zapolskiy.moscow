<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/assets/php/function.php');

$section 			= cleanUrlParamN($_POST['section']);
$start 				= cleanUrlParamN($_POST['start']);
$num_per_page = cleanUrlParamN($_POST['num_per_page']);
$section_url  = cleanUrlParamAN($_POST['section_url']);
$where = ' WHERE section.id = templates.section_id ORDER BY rand()';
if($section > 0) {
	$where = ' WHERE templates.id = ts.templates_id AND ts.section_id = ' . $section . ' ORDER BY templates.name ASC';
}
try {
  $dbh = new PDO('mysql:host=localhost;dbname=' . $user, $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$res['data'] = array();
foreach($dbh->query('SELECT templates.name, templates.img_local, templates.url from templates, templates_section as ts' . $where . ' LIMIT ' . $start . ', ' . $num_per_page) as $row) {
	$res['data'][] = array('name'=>$row['name'], 'img'=>'/assets/images/'.$row['img_local'], 'url'=>'/template/'.$section_url.'/'.$row['url'].'/');
}
$status = TRUE;
if($status == TRUE) {
	$res['sendstatus'] = 'done';
	$res['next'] = $start + $num_per_page;
} else {
	$res['message'] = 'Error!';
}
echo json_encode($res);
?>