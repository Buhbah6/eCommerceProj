Feature: modify_quantity_in_cart
  In order to modify the quantity of a product in my cart
  As a user
  I need to be able to modify a product in the cart

  Scenario: Change the number of Fridges in the cart to 5
    Given I am logged in as "user0" with password "TestPass"
    And I click "View Cart"
    And I click "Modify Quantity"
    And I input "5 in the "qty" box
    And I click "update!"
    And I see "All Products in Cart"
    Then I see "Quantity in cart: 5"

