<h1>foi</h2>
<ul>
    <?php foreach($this->view->submissoes as $admin): ?>
        <li><?php echo $admin['user'];?></li>
    <?php endforeach;?>
</ul>