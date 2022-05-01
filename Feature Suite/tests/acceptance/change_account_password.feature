Feature: change_account_password
  In order to change my password
  As a user
  I need to be able to modify account settings

  Scenario: Change password to 'Test'
  Given I am on the settings page
  When I select "Change Password"
  And I input my current password in the "Current Password" box
  And I input 'Test' in the "New Password" box
  And I click "Change Password"
  Then my password is 'Test'
