Feature: checkout
  In order to check out a set of products
  As a Consumer
  I need to be able to provide my payment information

  Scenario: Check out all products in the cart
    Given I am on the cart page
    When I click on "Proceed to Checkout"
    And I enter my payment information into the respective boxes
    And I click "Complete Transaction"
    Then I see "Transaction Completed"
