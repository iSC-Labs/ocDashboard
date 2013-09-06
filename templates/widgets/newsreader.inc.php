<?php 
// add number of shown news and "mark as read" click
if(isset($additionalparams['num']) && $additionalparams['num'] != "") { ?>
	 
	 <div class="ocDashboard newsreader counter"><?php p($additionalparams['actual'].'/'.$additionalparams['num']); ?> <span id="markNewsAsRead">&#10003;</span></div>

<?php } ?>

<?php
// add favicon from source website
if(isset($additionalparams['fav']) && $additionalparams['fav'] != "") {
	$style = "background-image: url('".$additionalparams['fav']."'); background-repeat: no-repeat; background-position: 0px 2px; background-size: 18px 18px; padding-left: 21px;";
} else {
	$style = "";
}
?>
	
	<div class='ocDashboard newsreader items'>
	
<?php 
if(isset($additionalparams['headline']) && $additionalparams['headline'] != "") {
?>
		<h2 style="<?php print_unescaped($style); ?>">
		<?php 
		if(isset($additionalparams["url"]) && $additionalparams["url"] != "") {
		?>
			<a target='_blank' href="<?php print_unescaped($additionalparams["url"]); ?>"><?php p($additionalparams['headline']); ?></a>
		<?php 
		} else {
			p($additionalparams['headline']);
		}
		?>
		</h2>
<?php
}

// show date only if there are news
if (isset($additionalparams['headline']) && $additionalparams['headline'] != "" && isset($additionalparams['pubdate']) && $additionalparams['pubdate'] != "") {
	if(OC_L10N::findLanguage() == "de" || OC_L10N::findLanguage() == "de_DE") { ?>
	
		<div class='ocDashboard newsreader date'><?php p(date("d.m.y", $additionalparams['pubdate'])); ?> - <?php print_unescaped(date("G:i", $additionalparams['pubdate'])); ?> Uhr</div>
	
	<?php } else { ?>
	
		<div class='ocDashboard newsreader date'><?php p(date("F j", $additionalparams['pubdate'])); ?><sup><?php print_unescaped(date("S", $additionalparams['pubdate'])); ?></sup> <?php print_unescaped(date("Y, g:i a", $additionalparams['pubdate'])); ?></div>
	
	<?php }
} ?>
 
	<div class='newsItem'>
		<?php 
		if(isset($additionalparams['content']) && $additionalparams['content'] != "") {
			print_unescaped($additionalparams['content']);
		}
		 ?>
	</div>
</div>