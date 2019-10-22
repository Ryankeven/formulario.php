describe('Required test', function() {
    it('Visits the form', function() {
      cy.visit('http://localhost:8000/')
    })
  
  it('Submit values', function() {
    
    cy.get('input[name="Register"]').click()
    cy.contains('Welcome Teste, we are currently reviewing your profile and will soon return you the result.').should('not.exist')

  })
})