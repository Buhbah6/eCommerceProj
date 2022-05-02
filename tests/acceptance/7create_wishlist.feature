Feature: create_wishlist
  In order to have a public list of items that you want to share with others
  As a user
  I need to be able to create a wishlist

  Scenario: try creating wishlist correctly
    Given I am logged in as "user0" with password "TestPass"
    And I am on "/Wishlist/main"
    And I click "Create a new Wishlist"
    And I input "myList" in the "name" box
    And I input "This is a list" in the "description" box
    And I click "Create!"
    Then I see "myList"