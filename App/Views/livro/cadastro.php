<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Cadastro de Livro</h3>

            <?php if($Sessao::retornaMensagem()){ ?>
                <div class="alert alert-warning" role="alert"><?php echo $Sessao::retornaMensagem(); ?></div>
            <?php } ?>

            <form action="http://<?php echo APP_HOST; ?>/livro/salvar" method="post" id="form_livro">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control"  name="titulo" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('titulo'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="subTitulo">Sub-Titulo</label>
                    <input type="text" class="form-control" name="subTitulo" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('subTitulo'); ?>">
                </div>
                <div class="form-group">
                    <label for="edicao">Edição</label>
                    <input type="text" class="form-control" name="edicao" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('edicao'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="editora">Editora</label>
                    <input type="text" class="form-control" name="editora" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('edicao'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="ano">Ano</label>
                    <input type="text" class="form-control" name="ano" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('ano'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" name="isbn" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('isbn'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="numeroPagina">Número de Páginas</label>
                    <input type="text" class="form-control" name="numPagina" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('numPagina'); ?>">
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="text" class="form-control" name="quantidade" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('quantidade'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="valorCompra">Valor de Compra</label>
                    <input type="text" class="form-control" name="valorCompra" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('valorCompra'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="valorVenda">valor de Venda</label>
                    <input type="text" class="form-control" name="valorVenda" placeholder="" value="<?php echo $Sessao::retornaValorFormulario('valorVenda'); ?>" required>
                </div>

                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>
