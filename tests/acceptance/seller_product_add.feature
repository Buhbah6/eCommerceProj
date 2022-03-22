Feature: seller_product_add
  In order to add a product
  As a seller
  I need to be able to be logged in

  Scenario: try seller_product_add
  Given I am logged in 
  When I click the button to delete an item
  Then I will be able delete the item from my account
