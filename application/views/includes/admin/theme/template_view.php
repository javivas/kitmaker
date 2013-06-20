<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CMS para m&oacute;biles</title>

	<link href="<?php echo  base_url() ?>assets/front/css/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">

<?php
    $data['content']=$content;
    $this->load->view('includes/admin/theme/header_view');
    $this->load->view('includes/admin/theme/sidebar_view');
    
    $this->load->view('includes/admin/theme/content_view',$content);
    //$this->output->append_output($content);
    

    $this->load->view('includes/admin/theme/footer_view');

?>
</body>
</html>
