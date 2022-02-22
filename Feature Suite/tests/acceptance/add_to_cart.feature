Feature: add_to_cart
  In order to add a product to the cart
  As a consumer 
  I need to add a product to my cart

Scenario: Add a chair to the cart
  Given I am logged in and on the chair product page
  When I click 'Add to cart'
  Then the product will be added to my cart


