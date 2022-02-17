Feature: seller_show_location
  In order to see the location of the sold item
  As a seller 
  I need to be able logged in

  Scenario: try seller_show_location
  Given I am logged in 
  When I look for sold items 
  Then I will be able to see the location
