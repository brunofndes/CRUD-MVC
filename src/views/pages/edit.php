<?php $render('header'); ?>

    <h2> Editar Usuário</h2>

    <form method="post" action="<?=$base;?>/usuario/<?=$usuario['id']?>/editar">
        <p>
            <label>
                Nome:</br>
                <input type="text" name="name" value="<?=$usuario['nome'];?>"/>
            </label>
        </p>
        <p>
            <label>
                Email:</br>
                <input type="email" name="email" value="<?=$usuario['email'];?>" />
            </label>
        </p>
        <p>
            <a href="<?=$base;?>/lista">Cancelar</a> | <input type="submit" value="Salvar">
        </p>

    </form>

<?php $render('footer'); ?>