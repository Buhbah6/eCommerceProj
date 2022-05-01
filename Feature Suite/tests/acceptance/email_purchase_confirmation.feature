Feature: email_purchase_confirmation
  In order to recieve confirmation that a transaction has passed successfully
  As a Buyer
  I need to have a valid email associated with my account

  Scenario: Receive confirmation for a transaction
    Given I have completed the check out process
    When I verify my email
    Then I see an email detailing the products purchased with the cost
