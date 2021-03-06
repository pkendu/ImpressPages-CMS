<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $this \Ip\View
 */
?>
<?php echo $this->doctypeDeclaration(); ?>
<html<?php echo $this->htmlAttributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo  BASE_URL . LIBRARY_DIR ?>fonts/font-awesome/font-awesome.css" type="text/css" rel="stylesheet" media="screen" />

    <?php echo $site->generateHead(); ?>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body<?php if ($site->managementState()) { echo ' class="manage"'; } ?> >

<?php echo $this->generateBlock('main'); ?>

<?php echo $site->generateJavascript(); ?>
</body>
</html>