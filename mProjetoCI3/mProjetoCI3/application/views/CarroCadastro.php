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
        <a href="<?php echo base_url() . 'home'; ?>">Voltar</a>
        <h1>Cadastro de Carros</h1>
        <?php echo form_open('Carro/inserir'); ?>
            <input type="text" required placeholder="Marca aqui..." name="marca"/>
            <br><br>
            <input type="text" required placeholder="Modelo aqui..." name="modelo"/>
            <br><br>
            <input type="number" required placeholder="Portas aqui..." name="portas"/>
            <br><br>
            <input type="color" required placeholder="Cor aqui..." name="cor"/>
            <input type="text" required placeholder="Placa aqui..." name="placa"/>
            <br><br>
            <input type="text" required placeholder="Proprietário aqui..." name="idPessoa"/>
            <br><br>
            <input type="submit" value="Salvar" name="salvar">
            <input type="reset" value="Limpar" name="limpar">
        <?php echo form_close(); ?>
        <h2>Lista Carros</h2>
        <table>
            <thead>
                <tr>
                    <th>Marca</th><th>Modelo</th><th>Portas</th><th>Cor</th><th>Propietário</th><th>Placa</th><th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carro as $car): ?>
                <tr>
                    <td><?php echo $car->Marca; ?></td>
                    <td><?php echo $car->Modelo; ?></td>
                    <td><?php echo $car->Portas; ?></td>
                    <input type="color" disable value='<?php echo $car->Cor; ?>' name="cor"/>
                    <td><?php echo $car->idPessoa; ?></td>  
                    <td>
                        <a href="<?php echo base_url() .
                                'carro/editar/' . 
                                $car->idCarro; ?>" >Editar</a> | 
                        <a href="<?php echo base_url() .
                                'carro/excluir/' . 
                                $car->idCarro; ?>" >Deletar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
