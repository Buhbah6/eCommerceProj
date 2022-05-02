Feature: view_categories
  In order to see all categories 
  As a user
  I need to be logged in and on the main page

  Scenario: try viewing all categories
    Given I am logged in as "user0" with password "TestPass"
    And I click "View All Categories" 
    And I see "Kitchen"
    And I see "Living Room"
    And I see "Bedroom"
    Then I see "Workshop"
