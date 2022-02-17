Feature: seller_product_modify
  In order to modify a product in product price
  As a seller must have a account
  I need to have a account and be logged in to modify the product

  Scenario: try product modify the price
  Given I am logged in 
  When I click the button to adjust the price 
  Then I will be able to modify the amount

  Scenario: try product modify the description
  Given I am logged in 
  When I click the button to adjust the description 
  Then I will be able to modify what the product is.


