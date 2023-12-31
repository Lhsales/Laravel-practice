<div class="row">
    <div class="input-field col">
      <input placeholder="Placeholder" id="titulo" type="text" class="validate" value="{{ isset($registro->titulo) ? $registro->titulo : ''}}">
      <label for="titulo">Título</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      <textarea id="descricao" class="materialize-textarea" name="descricao">
        {{ isset($registro->descricao) ? $registro->descricao : ''}}
      </textarea>
      <label for="descricao">Descrição</label>
    </div>
</div>

<div class="row">
    <div class="input-field col">
      <input placeholder="Placeholder" id="valor" type="text" class="validate" value="{{ isset($registro->valor) ? $registro->valor : ''}}">
      <label for="titulo">Valor</label>
    </div>
</div>

<div class="row">
    <div class="file-field input-field">
        <div class="btn blue">
            <span>Imagem</span>
            <input type="file" name="imagem" id="imagem">
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
        </div>
    </div>
</div>

<div class="row">
        <p>
            <input type="checkbox" class="filled-in" id="publicado" {{ isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : ''}} />
            <label for="publicado">Publicado?</label>
        </p>
</div>

<br><br>