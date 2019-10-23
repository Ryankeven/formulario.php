describe('Fill Test', function() {
    it('Visits the form', function() {
      cy.visit('http://localhost:8000/')
      })
    
    it('Submit values', function() {
      cy.get('#name').type('Teste')
      cy.get('#email').type('example@example.com')
      cy.get('#age').type('31')
      cy.get('#nationality').type('ilha do nunca')
      cy.get('#date_of_birth').type('11/11/1111')
      cy.get('[type="radio"]').check('F')
      cy.get('input[name="Register"]').click()
      cy.contains('Welcome Teste, we are currently reviewing your profile and will soon return you the result.')
  
    })
  })