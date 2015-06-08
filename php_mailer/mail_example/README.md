# mail_example
mail.php is the basic email with PHP example.  It may or may not work by defualt on your XAMPP

mail_withmailer.php includes a standard external mail function, currently configured to send mail through gmail
Must make a copy of email_config.default.php to email_config.php, and set to your email information.  Remember to not add you email_config.php file in your git repo
mail example

## Prototype 1
- Call the PHP mailer with your gmail credentials (might want to make a new account and use that)
- Create a custom message

## Prototype 2
- Make a form in another file, such as formhandler.php
- From formhandler.php, send the data to mail_withmailer.php and form a custom message based on that form input
