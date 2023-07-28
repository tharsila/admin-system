@csrf

<input type="hidden" name="tipo" value={{ $type }}>

<div class="form-group row">
    <label for="nome" class="col-sm-2 col-form-label required">
        Nome*
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="nome" 
            required 
            maxlength="255" 
            class="form-control"
            id="nome"
        >
    </div>
</div>
<div class="form-group row">
    <label for="razao_social" class="col-sm-2 col-form-label">
        Razão Social
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="razao_social"  
            maxlength="255" 
            class="form-control"
            id="razao_social"
        >
    </div>
</div>
<div class="form-group row">
    <label for="documento" class="col-sm-2 col-form-label required">
        Documento*
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="documento" 
            required 
            maxlength="14" 
            class="cpf_rg form-control"
            id="documento"
        >
    </div>
</div>
<div class="form-group row">
    <label for="ie_rg" class="col-sm-2 col-form-label required">
        IE/RG
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="ie_rg"
            required  
            maxlength="12" 
            class="ie_rg form-control"
            id="ie_rg"
        >
    </div>
</div>
<div class="form-group row">
    <label for="nome_contato" class="col-sm-2 col-form-label required">
        Nome Contato*
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="nome_contato" 
            required 
            maxlength="255" 
            class="nome_contato form-control"
            id="nome_contato"
        >
    </div>
</div>
<div class="form-group row">
    <label for="celular" class="col-sm-2 col-form-label required">
        Celular*
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="celular" 
            required 
            maxlength="15" 
            class="celular form-control"
            id="celular"
        >
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label required">
        Email*
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="email" 
            required 
            maxlength="100" 
            class="email form-control"
            id="email"
        >
    </div>
</div>
<div class="form-group row">
    <label for="telefone" class="col-sm-2 col-form-label">
        Telefone
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="telefone" 
            maxlength="15" 
            class="telefone form-control"
            id="telefone"
        >
    </div>
</div>
<div class="form-group row">
    <label for="cep" class="col-sm-2 col-form-label required">
        CEP*
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="cep" 
            required
            maxlength="8" 
            class="cep form-control"
            id="cep"
        >
    </div>
</div>
<div class="form-group row">
    <label for="logradouro" class="col-sm-2 col-form-label required">
        Logradouro*
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="logradouro" 
            required
            maxlength="150" 
            class="logradouro form-control"
            id="logradouro"
        >
    </div>
</div>
<div class="form-group row">
    <label for="cidade" class="col-sm-2 col-form-label required">
        Bairro*
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="bairro" 
            required
            maxlength="100" 
            class="bairro form-control"
            id="bairro"
        >
    </div>
</div>
<div class="form-group row">
    <label for="cidade" class="col-sm-2 col-form-label required">
        Cidade*
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="cidade" 
            required
            maxlength="100" 
            class="cidade form-control"
            id="cidade"
        >
    </div>
</div>
<div class="form-group row">
    <label for="estado" class="col-sm-2 col-form-label required">
        Estado*
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="estado" 
            required
            maxlength="2" 
            class="estado form-control"
            id="estado"
        >
    </div>
</div>
<div class="form-group row">
    <label for="observacao" class="col-sm-2 col-form-label">
        Observação
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="observacao" 
            maxlength="500" 
            class="observacao form-control"
            id="observacao"
        >
    </div>
</div>

<button class="btn btn-primary" name="submit" value="" type="submit">Salvar</button>
