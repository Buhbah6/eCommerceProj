Feature: consumer_add_to_wishlist
  In order to have a functional wishlist 
  As a consumer/user
  I need to be able to add products to my wish list

  Scenario: try adding to the wishlist correctly
    Given I am logged in with an existing account 
    When I add a product to the whishlist 
    Then I see "this product was added to your whishlist successfully"

  Scenario: try adding to the wishlist incorrectly
    Given I am not logged in with an existing account 
    When I add a product to the whishlist 
    Then I see "You need to login"