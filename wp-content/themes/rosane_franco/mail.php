<?php require_once('../../../wp-load.php'); ?>

<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="De: $name \nE-mail: $email \n\nMensagem: $message";
$recipient = 'Bcc: <'. get_option('admin_email') . '>'. "\r\n";
$subject = "Contato do site Mar Adentro";
$mailheader = "From: $email \r\n";
if (mail($recipient, $subject, $formcontent, $mailheader)) {
	?>
		<script>
			alert("Sua mensagem foi enviada. Obrigado pelo contato.");
			location.href = '<?php echo home_url( '/' ); ?>';
		</script>
	<?php
} else {	
	?>
		<script>
			alert("Sua mensagem não foi enviada. Por favor, tente novamente.");
			location.href = '<?php echo get_site_url() . '/contato'; ?>';
		</script>
	<?php
}
?>
