Feature: modify_seller_profile
  In order change my seller information
  As a user
  I need to input profile modifications in the seller update page

  Scenario: try modifying "placeholder" seller
    Given I am logged in as "user0" with password "TestPass"
    And I click "View Seller Profile"
    And I see "placeholder"
    And I click "Update Seller Information"
    And I input "placeholderUpdated" in the "name" box
    And I click "Update!"
    Then I see "placeholderUpdated"
