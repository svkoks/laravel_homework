<a href="<?=route('news.categories')?>">Категории новостей</a>
<br>
<h3>Новости категории</h3>
<p><i>Наши новости - все течет, все меняется!</i></p>
<br>
<?php foreach ($news as $item) : ?>
    <strong><a href="<?=route('oneNews', $item['id'])?>"><?=$item['title']?></a></strong><br>
<?php endforeach;?>