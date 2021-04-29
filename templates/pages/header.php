<header>
		<nav class="navbar navbar-expand-lg bg-light navbar-light" >
			<a class="navbar-brand" href="?oldal=/"><img src="./images/<?= $header['imagesource']?>" alt="<?= $header['imagealt']?>"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
 				<span class="navbar-toggler-icon"></span>
 			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
 				<ul class="navbar-nav mr-auto btn-group">
				 	<?php foreach ($pages as $url => $page) { ?>
						<li class="nav-item" <?= (($page == $find) ? ' class="active"' : '') ?>>
					    	<b><a class="nav-link" href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
					        	<?= $page['text'] ?></a></b>
						</li>
					<?php } ?>
 				</ul>
 			</div>
		</nav>
</header>