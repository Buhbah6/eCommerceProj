Feature: change_account_name
  In order to change my name on my account
  As a user 
  I need to be able to change the name associated with my account.

  Scenario: Change name associated with account to "John Doe"
  Given I am logged in and on my account page
  When I select 'Edit Profile' 
  And I input "John Doe" in the "name" box
  And I click "Save changes"
  Then my account name will be "John Doe"