	</div>

</div><!-- /.container -->

<div class="pattern-footer">
	<div class="pattern-logo"></div>
</div>

<!-- FOOTER -->
<div class="container container-footer">
	<p class="pull-right back-to-top"><a href="#" alt="Volver arriba"><span class="glyphicon glyphicon-arrow-up"></span></a></p>
	<div class="center-block">
		<p><?php bloginfo('name'); ?> Copyright &copy; <?php echo date('Y'); ?>. Todos los derechos reservados. </p>
	</div>
</div>

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/script.js" type="text/javascript"></script>
<?php include('analytics.php'); ?>
<script type="text/javascript">
function googleTranslateElementInit() { new google.translate.TranslateElement({pageLanguage: 'es'}, 'google_translate_element'); } 
(function(){
	var tra= document.createElement('script'); tra.type="text/javascript"; tra.async=true;
	tra.src= ('https:' == document.location.protocol ? 'https:' : 'http:') + "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tra, s);
})();
</script>
</body>
</html>
