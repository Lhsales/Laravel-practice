{{ csrf_field() }}

<div class="row">
    <div class="input-field col s12">
      <input placeholder="Placeholder" id="titulo" name="titulo" type="text" class="validate" value="{{ isset($registro->titulo) ? $registro->titulo : ''}}">
      <label for="titulo">Título</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      <textarea id="descricao" class="materialize-textarea" name="descricao">{{ isset($registro->descricao) ? $registro->descricao : ''}}</textarea>
      <label for="descricao">Descrição</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      <input placeholder="Placeholder" id="valor" name="valor" type="text" class="validate" value="{{ isset($registro->valor) ? $registro->valor : ''}}">
      <label for="titulo">Valor</label>
    </div>
</div>

<div class="row">
    <div class="file-field input-field col s6">
        <div class="btn blue">
            <span>Imagem</span>
            <input type="file" name="imagem" id="imagem">
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
        </div>
    </div>
    <div class="col s6 right-align">
        <label>
            <input type="checkbox" name="publicado" {{ isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : ''}} value="true" />
            <span>Publicado?</span>
        </label>
    </div>
</div>

<br>