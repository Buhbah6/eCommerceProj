Feature: delete_seller_profile
  In order to delete my seller profile
  As a user
  I need to click on the deletion option on my seller profile page

  Scenario: delete "placeholder" seller page
    Given I am logged in as "user0" with password "TestPass"
    And I click "View Seller Profile"
    And I click "Delete Seller Page and all Products"
    Then I am redirected to "/Main/index"
