Feature: search_by_product_name
  In order to search for a product in the store
  As a user
  I need to be able to search for the product with the product name

  Scenario: try search Fridge
  Given I am logged in as "user0" with password "TestPass"
  When I input "Fridge" in the "search" box
  And I click "Fridge"
  Then I am redirected to "/Product/index/1"