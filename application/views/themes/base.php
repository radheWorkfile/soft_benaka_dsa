
<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $title;?> | <?php echo config_item('company_name');?> </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title;?> | <?php echo config_item('company_name');?> </title>		
	 <?php $this->load->view('themes/includes/css');?>
</head>
<body>
<?php $this->load->view('themes/includes/header');?>

 <!-- main page section start here -->
 <?php if (trim($layout) == "") { ?>
        <div style="margin: 10%">
            <h2 align="center">Welcome to <?php echo config_item('company_name') ?></h2>
            <div align="center">Please click above to login or sign up</div>
        </div>
    <?php } else {
        include_once(APPPATH . "views/themes/" . $layout);
    } ?>
<!-- main page section start end -->

<?php $this->load->view('themes/includes/footer');?>
<?php $this->load->view('themes/includes/script');?>

</body>

</html>