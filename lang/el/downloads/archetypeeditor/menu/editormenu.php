		<?php
		$active[$current] = 'class="active"';
		?>
		<img src="/gui/Editorlogo.png" style="height:110px;">
		<ul>
			<li><a href="home" <?php if($pageOn == 'home.php'){?> class="active"<?php }?>>Archetype Editor Home</a></li>
			<li><a href="releasenotes" <?php if($pageOn == 'releasenotes.php'){?> class="active"<?php }?>>Release Notes</a></li>
		</ul>
		<br/>
		<a href="/downloads/modellingtools">>> Back to modelling tools</a>