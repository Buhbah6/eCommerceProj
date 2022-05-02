Feature: modify_account
  In order to change my account information
  As a user
  I need to input account modifications in the update page

  Scenario: try modify_account
    Given I am logged in as "user0" with password "TestPass"
    And I am on "/User/update"
    And I input "user10" in the "username" box
    And I click "Update!"
    And I am redirected to "/User/index"
    And I see "user10"
    And I click "Modify Account"
    And I input "user0" in the "username" box
    And I click "Update!"
    Then I see "user0"
