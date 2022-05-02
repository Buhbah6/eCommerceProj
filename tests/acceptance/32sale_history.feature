Feature: sale_history
  In order to view all previous sales
  As a user
  I need to be logged in

  Scenario: try sale_history
  Given I am logged in as "user0" with password "TestPass"
  And I click "View Seller Profile"
  And I click "View Sale History"
  Then I am redirected to "/Seller/sale_history"
