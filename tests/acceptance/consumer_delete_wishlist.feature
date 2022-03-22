Feature: consumer_delete_wishlist
  In order to to unshare the wishlist
  As a consumer/user
  I need to be able to delete a wishlist

  Scenario: try deleting wishlist correctly
    Given I am logged in with an existing account 
    When I delete a whishlist 
    Then I see "main page"