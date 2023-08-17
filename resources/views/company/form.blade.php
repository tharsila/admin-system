@csrf

<input type="hidden" name="tipo" value={{ $type }}>

<div class="form-group row">
    <label for="nome" class="col-sm-2 col-form-label required ">
        Nome*
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="nome" 
            required 
            maxlength="255" 
            class="form-control @error('nome') is-invalid @enderror"
            id="nome"
            value="{{ old('nome') }}"
        >
        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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
            class="form-control @error('razao_social') is-invalid @enderror"
            id="razao_social"
            value="{{ old('razao_social') }}"
        >
        @error('razao_social')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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
            class="cpf_cnpj form-control @error('documento') is-invalid @enderror"
            id="documento"
            value="{{ old('documento') }}"
        >
        @error('documento')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="ie_rg" class="col-sm-2 col-form-label">
        IE/RG
    </label>
    <div class="col-sm-10">
        <input 
            type="text" 
            name="ie_rg"
            maxlength="25" 
            class="ie_rg form-control"
            id="ie_rg"
            value="{{ old('ie_rg') }}"
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
            maxlength="100" 
            class="nome_contato form-control @error('nome_contato') is-invalid @enderror"
            id="nome_contato"
            value="{{ old('nome_contato') }}"
        >
        @error('nome_contato')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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
            maxlength="11" 
            class="celular form-control @error('celular') is-invalid @enderror"
            id="celular"
            value="{{ old('celular') }}"
        >
        @error('celular')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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
            class="email form-control @error('email') is-invalid @enderror"
            id="email"
            value="{{ old('email') }}"
        >
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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
            maxlength="10" 
            class="telefone form-control @error('telefone') is-invalid @enderror"
            id="telefone"
            value="{{ old('telefone') }}"
        >
        @error('telefone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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
            class="cep form-control @error('cep') is-invalid @enderror"
            id="cep"
            value="{{ old('cep') }}"
        >
        @error('cep')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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
            maxlength="100" 
            class="logradouro form-control @error('logaradouro') is-invalid @enderror"
            id="logradouro"
            value="{{ old('logradouro') }}"
        >
        @error('logradouro')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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
            maxlength="50" 
            class="bairro form-control @error('bairro') is-invalid @enderror"
            id="bairro"
            value="{{ old('bairro') }}"
        >
        @error('bairro')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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
            maxlength="50" 
            class="cidade form-control @error('cidade') is-invalid @enderror"
            id="cidade"
            value="{{ old('cidade') }}"
        >
        @error('cidade')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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
            class="estado form-control @error('estado') is-invalid @enderror"
            id="estado"
            value="{{ old('estado') }}"
        >
        @error('estado')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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
            value="{{ old('observacao') }}"
        >
    </div>
</div>

<button class="btn btn-primary" name="submit" value="" type="submit">Salvar</button>
