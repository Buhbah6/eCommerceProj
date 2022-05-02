Feature: view_sellers
  In order to view all sellers
  As a user
  I need to be logged in on the main page

  Scenario: try view_sellers
  Given I am logged in as "user0" with password "TestPass"  
  And I click on "View All Sellers"
  And I see "Business Business 1"
  Then I see "Independent Business 1"