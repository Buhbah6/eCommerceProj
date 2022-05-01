Feature: seller_display_product_details
  In order to showcase the details of the product
  As a seller
  I need to be able to login and click on the product 

  Scenario: try seller_display_product_details
  Given I am logged in 
  When I click the product 
  Then I will be able to see a description of the product
