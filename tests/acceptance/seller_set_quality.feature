Feature: seller_set_quality
  In order to set the quality of the product
  As a seller 
  I need to have a account

  Scenario: try add quality of sold item
  Given I am logged in
  When i sell a product on the website
  Then i should see a category

