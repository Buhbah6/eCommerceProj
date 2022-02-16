Feature: consumer_contact_seller
  In order to get information from a seller
  As a consumer/user
  I need to be able to contact the seller 

  Scenario: try contacting seller
    Given I have registered with an existing account 
    When I send a message to the seller 
    Then I see "The message was sent successfully"