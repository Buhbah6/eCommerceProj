Feature: view_product_page
  In order to view a product page
  As a user 
  I need to select a product

  Scenario: try view_product_page
  Given I am logged in as "user0" with password "TestPass" 
  And I click "Fridge"
  Then I am redirected to "/Product/index/1"
