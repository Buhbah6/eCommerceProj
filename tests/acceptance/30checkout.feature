Feature: checkout
  In order to check out a set of products
  As a Consumer
  I need to be able to provide my payment information

  Scenario: Check out all products in the cart
    Given I am logged in as "user0" with password "TestPass"
    And I click "Fridge"
    And I click "Add to Cart"
    And I click "Proceed to Checkout"
    And I click "Pay!"
    And I see "Purchase History"
    Then I am redirected to "/User/purchasehistory"
