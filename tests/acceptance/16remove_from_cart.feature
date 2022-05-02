Feature: remove_from_cart
  In order to remove an item from cart
  As a user
  I need to select a product in my cart

  Scenario: try remove_from_cart
  Given I am logged in as "user0" with password "TestPass" 
  And I click "View Cart"
  And I click "Remove From Cart"
  And I see "All Products in Cart"
  Then I don't see "Fridge"