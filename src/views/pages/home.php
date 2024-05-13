<?php $render('header'); ?>

<a href="<?=$base?>/novo"> Novo Usuário</a>

<table border="1" width='100%'>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <tr>
        <?php foreach($usuarios as $usuario):?>

        <td><?=$usuario['id']?></td>
        <td><?=$usuario['nome']?></td>
        <td><?=$usuario['email']?></td>

        <?php endforeach?>

        <td>
            <a href="<?=$base?>/usuario/<?=$usuario['id']?>/editar">Editar</a>
            <a href="<?=$base?>/usuario/<?=$usuario['id']?>/deletar">Excluir</a>
        </td>
    </tr>
</table>

<?php $render('footer') ?>