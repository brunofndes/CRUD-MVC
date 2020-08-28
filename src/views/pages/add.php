<?php $render('header'); ?>

<h2> Adicionar Novo Usuário</h2>

<form method="post" action="<?=$base;?>/novo">
    <p>
        <label>
            Nome:</br>
            <input type="text" name="name"/>
        </label>
    </p>
    <p>
        <label>
            Email:</br>
            <input type="email" name="email" />
        </label>
    </p>
    <p>
        <a href="<?=$base;?>/">Cancelar</a> | <input type="submit" value="Adicionar">
    </p>

</form>

<?php $render('footer'); ?>
