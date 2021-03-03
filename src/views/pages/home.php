<?php $render('header'); ?>


<a class="button" href="<?=$base;?>/novo">Novo Usuário</a>
<br/>

<table border="1" width="100%">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td class="action">
                <a  href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
                    <img width="20" src="<?=$base;?>/assets/images/document.png" />
                </a>
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Deseja realmente excluir?')">
                    <img width="20" src="<?=$base;?>/assets/images/trash.png" />
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>