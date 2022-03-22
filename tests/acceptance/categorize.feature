Feature: categorize
  In order to put a product into a category
  As a Seller
  I need to be able to select a category that the product fits into

  Scenario: put a fridge in the "Appliances" category
    Given I am on the product add page
    When I click on the "category" drop down menu
    And I click on "Appliances" from the list
    Then I see the category set as "Appliances"

 
