<?php $render('header'); ?>

<h1>Listagem de Clientes</h1>
<p>Clientes já cadastrados no sistema.</p>
<table border="0" style="width:50%">

    <tr style="background-color: #CCC">
        <td style="width:5%">ID</td>
        <td style="width:20%">Nome</td>
        <td style="width:20%">Email</td>
        <td style="width:10%">Ações</td>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?=$usuario['id']; ?></td>
        <td><?=$usuario['nome']; ?></td>
        <td><?=$usuario['email']; ?></td>
        <td>
            <a href="<?=$base;?>/usuario/<?=$usuario['id']?>/excluir" onclick="return confirm('Excluir?')">
                <img width="20" src="<?=$base;?>/assets/images/trash.png" alt="">
            </a> 

            <a href="<?=$base;?>/usuario/<?=$usuario['id']?>/editar">
                <img width="20" src="<?=$base;?>/assets/images/document.png" alt="">
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
    <p>
        <a href="<?=$base;?>/">Voltar para home</a>
    </p>




</table>
<?php $render('footer'); ?>
