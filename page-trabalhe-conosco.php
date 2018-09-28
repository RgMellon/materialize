<?php include('header.php'); ?>

<div class="header-fale-conosco">
</div>

<div class="container" style="margin-top:4rem;">
    <div class="row">
        <div class="col s12 m6">
            <form class="formulario-contato">
                <div class="input-field col s12">
                    <label for="nome">NOME *</label>
                    <input type="text" id="nome" name="nome" class="input-form">
                </div>

                <div class="input-field col s12">
                    <label for="email">AREA DE ATUAÇÃO *</label>
                    <input type="email" id="email" name="email">
                </div>

                <div class="input-field col s12">
                    <label for="email">E-MAIL *</label>
                    <input type="email" id="email" name="email">
                </div>
            
                <div class="input-field col s12 m6">
                    <label for="telefone">TELEFONE *</label>
                    <input type="tel" id="telefone" name="telefone">
                </div>
                        
                <div class="input-field col s12 m6">
                    <label for="cidade">CIDADE/UF *</label>
                    <input type="text" id="cidade" name="cidade" >
                </div>

                <div class="input-field col s12">
                    <textarea id="mensagem" class="meu-text"></textarea>
                    <label for="mensagem">Mensagem *</label>
                </div>

                <button class="btn waves-effect waves-light" style="background: #a40e12; margin-left: 11px;" type="submit" name="action">Enviar </button>
            </form>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>