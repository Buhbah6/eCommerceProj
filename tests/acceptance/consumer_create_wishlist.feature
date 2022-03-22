Feature: consumer_create_wishlist
  In order to have a public list of items that you want to share with others
  As a consumer/user
  I need to be able to create a wishlist

  Scenario: try creating wishlist correctly
    Given I am logged in with an existing account 
    When I create a whishlist 
    Then I see "wishlist"

  Scenario: try creating wishlist incorrectly
    Given I am not logged in with an existing account 
    When I create a whishlist 
    Then I see "You need to login"