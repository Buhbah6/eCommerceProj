Feature: add_to_cart
  In order to add a product to the cart
  As a user
  I need to add a product to my cart

Scenario: Add a chair to the cart
  Given I am logged in as "user0" with password "TestPass"
  And I click "Fridge"
  And I click "Add to Cart"
  And I see "All Products in Cart"
  Then I see "Fridge"


