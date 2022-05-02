Feature: create_seller_profile
  In order to create a seller profile
  As a user 
  I need to be able enter a name, location, and type for my business

  Scenario: Create seller page called "placeholder"
  Given I am logged in as "user0" with password "TestPass"
  And I click "Create Seller Profile"
  And I input "0" in the "type" box
  And I input "placeholder" in the "name" box
  And I input "unknown" in the "location" box
  And I click "Create!"
  And I click "Home Page"
  Then I see "View Seller Profile"