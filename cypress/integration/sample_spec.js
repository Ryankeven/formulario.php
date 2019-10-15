describe('My First Test', function() {
    it('Visits the form', function() {
      cy.visit('http://localhost:8000/')
    })

    it('Submit values', function() {
      cy.get('#nome').type('Teste')
      cy.get('#email').type('example@example.com')
      cy.get('#idade').type('31')
      cy.get('[type="radio"]').check('F')
      cy.get('#Altura').type('0,59')
      cy.get('#nacionalidade').type('ilha do nunca')
      cy.get('#data_de_nascimento').type('11/11/1111')
      cy.get('#telefone').type('31')
      cy.get('#cidade').type('BH')
      cy.get('#bairro').type('Lindeia')
      cy.get('#cpf').type('11111111111')
      cy.get('#cep').type('11111111')
      cy.get('#nome_do_pai').type('nunvi')
      cy.get('#nome_da_mãe').type('nunsei')
      cy.get('#destino').type('durval')
      cy.get('#data_de_ida').type('31/11/1113')
      cy.get('#data_de_volta').type('21/11/1114')
      cy.get('form').submit()
    })

  })