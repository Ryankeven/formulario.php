<form id="formulario" action="/script.php" method="POST">
    <fieldset>

        <legend>Dados pessoais</legend>
        <p>
            <label for="nome">nome: <em class="required">(obrigatório)</em></label>
            <input name="nome" id="nome" type="text" />
        </p>

        <p>
            <label for="email">Email Address:</label>
            <input name="email" id="email" type="text" />

        </p>

        <p>
           <label for="idade">idade (obrigatório):</label>
           <input name="idade" id="idade" type="text" />

        <p>
          <label for="Gênero">Gênero (opcional):</label>
          <input name="Gênero" id="Gênero" type="radio" value="F" > F
          <input name="Gênero" id="Gênero" type="radio" value="M" > M 

       </p>

       <p>
          <label for="Altura">Altura (opcional):</label>
          <input name="" id="Altura" type="text" />

        </p>

        <p>
           <label for="nacionalidade">nacionalidade (obrigatório):</label>
           <input name="" id="nacionalidade" type="text" />

       </p>

       <p>
         <label for="data de nascimento">data de nascimento (obrigatório):</label>
         <input name="data_de_nascimento" id="data_de_nascimento" type="text" />

      </p>

     <p>
       <label for="telefone">telefone (obrigatório):</label>
       <input name="" id="telefone" type="text" />
    <p>
      <label for="cidade">cidade (obrigatório):</label>
      <input name="" id="cidade" type="text" />
    </p>

    <p>
      <label for="bairro">bairro (obrigatório):</label>
      <input name="" id="bairro" type="text" />

    </p>

    <p>
      <label for="cpf">cpf (obrigatório):</label>
      <input name="" id="cpf" type="text" />

    </p>

    <p>
      <label for="cep">cep (obrigatório):</label>
      <input name="" id="cep" type="text" />

    </p>

    <p>
      <label for="nome do pai">nome do pai (obrigatório):</label>
      <input name="nome_do_pai" id="nome_do_pai" type="text" />

    </p>

    <p>
      <label for="nome da mãe">nome da mãe (obrigatório):</label>
      <input name="nome_da_mãe" id="nome_da_mãe" type="text" />

    </p>

    <p>
      <label for="destino">destino (obrigatório):</label>
      <input name="destino" id="destino" type="text" />

    </p>

    <p>
      <label for="data de ida">data de ida (obrigatório):</label>
      <input name="data_de_ida" id="data_de_ida" type="text" />

    </p>

    <p>
      <label for="data de volta">data de volta (obrigatório):</label>
      <input name="data_de_volta" id="data_de_volta" type="text" />

    </p>

    </fieldset>

    <p>
        <input type="button" value="Enviar" id="enviar"/>
    </p>

</form>
