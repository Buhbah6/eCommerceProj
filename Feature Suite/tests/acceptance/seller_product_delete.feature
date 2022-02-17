Feature: seller_product_delete
  In order to delete a product
  As a seller
  I need to be logged in

  Scenario: try seller_product_delete
  Given I am logged in 
  When I click on the item
  Then I will be able to delete it 
