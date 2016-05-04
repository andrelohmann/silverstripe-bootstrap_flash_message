<% if $BootstrapFlashMessage %>
<div id="BootstrapFlashMessage" class="alert alert-$BootstrapFlashMessage.Type alert-dismissible text-center" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	$BootstrapFlashMessage.Message
</div>
<% end_if %>