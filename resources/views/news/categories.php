<?php include "menu.php" ?>
<hr>
<h3>Категории новостей</h3><br>

<b><i><p>В нашем агрегаторе представлены следующие категории новостей:</p></i></b>
<br>
<?php foreach ($categories as $item) : ?>
<strong>
    <a href="<?=route('news.index')?>">Новости категории:<br> <?=$item['title']?></a><br><br>
</strong>
<br>
<?php endforeach;?>