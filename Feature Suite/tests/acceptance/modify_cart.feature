Feature: modify_cart
  In order to modify my cart
  As a Buyer
  I need to be able to modify a product in the cart

  Scenario: Change the number of chairs in the cart from 2 to 5
    Given I am on the cart page and have 2 of a certain chair in my cart
    When I input 5 in the "Quantity" box
    Then I see the quantity of the chair be set to 5
    And I see the price increase to 5 times the price of 1 chair

