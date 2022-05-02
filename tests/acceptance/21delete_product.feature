Feature: delete_product
  In order to delete a product
  As a user
  I need to select a product to delete

  Scenario: try deleting "Kitchen Table"
  Given I am logged in as "user0" with password "TestPass"
  And I click "View Seller Profile"
  And I click "Kitchen Table"
  And I click "Delete"
  Then I don't see "Kitchen Table"
