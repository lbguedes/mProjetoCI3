<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo base_url() . 'carro'; ?>">Voltar</a>
        <h1>Editar Carro</h1>
        <?php echo form_open('carro/atualizar'); ?>
            <input type="hidden" required value="<?php echo $car[0]->idCarro; ?>" name="idCarro"/>
            <input type="text" required value="<?php echo $car[0]->Marca; ?>" name="marca"/>
            <br><br>
            <input type="text" required value="<?php echo $car[0]->Modelo; ?>" name="modelo"/>
            <br><br>
            <input type="text" required value="<?php echo $car[0]->cor; ?>" name="cor"/>
            <br><br>
            <input type="number" required value="<?php echo $car[0]->Porta; ?>" name="porta"/>
            <br><br>
            <input type="number" required value="<?php echo $car[0]->Placa; ?>" name="Placa"/>
            <br><br>
            <input type="submit" value="Salvar" name="salvar">
        <?php echo form_close(); ?>
    </body>
</html>
