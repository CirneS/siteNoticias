<form action="<?php echo HOME_URI;?>usuario/alterarDados/<?php echo $id ?>" method="POST">
    <div class="form-row">
            <div class="form-group col-md-6">
                <input type="email" name="email" placeholder="Novo Email" required/>    
            </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="name" name="nome" placeholder="Nova Nome" required/>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-2">
            <button type="submit" name="alterar">ALTERAR</button>
        </div>
    </div>
</form>