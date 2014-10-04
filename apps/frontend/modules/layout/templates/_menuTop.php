<nav>
    <ul>
        <li><a href="<?= url_for('article', $onas); ?>">O nas</a></li>
        <li><a href="<?= url_for('artcategory', $news) ?>">Aktualności</a></li>
        <li>
        	<a href="<?= url_for('article', $activities); ?>">Zajęcia</a>
        	<ul>
        		<li><a href="<?= url_for('article', $activities); ?>">Rodzaje zajęć</a></li>
        		<li><a href="<?= url_for('activities_roosevelta'); ?>">Grafik ul. Roosevelta</a></li>
                <li><a href="<?= url_for('activities_korfantego'); ?>">Grafik Al. Korfantego</a></li>
        	</ul>
        </li>
        <li><a href="<?= url_for('article', $trenerzy); ?>">Trenerzy</a></li>
        <li><a href="<?= url_for('article', $cennik); ?>">Cennik</a></li>
        <li><a href="<?= url_for('@galleries'); ?>">Galeria</a></li>
        <li><a href="<?= url_for('contact'); ?>">Kontakt</a></li>
    </ul>
</nav>