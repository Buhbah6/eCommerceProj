Feature: trade
  In order to exchange items
  As a customer or seller
  I need to be able to see both items 

  Scenario: try trade products
  Given both customer and seller are able to log with a existing account
  When successfully login with credentials
  Then both users will be able to exchange products
