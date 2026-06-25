# Jer's notes about the testing setup

## Initial setup with instructions from https://github.com/lucatume/wp-browser

```bash
cd jer-twentytwentyfive-child-theme
# Add wp-browser dependency in composer
composer require --dev lucatume/wp-browser
# Use default setup: "portable configuration based on PHP built-in server, Chromedriver and SQLite."
vendor/bin/codecept init wpbrowser
# Run tests (it set up some default "smoke" tests for itself)
vendor/bin/codecept run
```

# Setting up new clones so the self-contained configuration functions

The initial `init wpbrowser` step installs chromedriver and `/tests/_wordpress/` locally, but it doesn't automatically happen with composer install on new repos afterwards. Follow the steps below on new copies (e.g. GitHub Actions) to get it into working order:

```bash
git clone git@github.com:jerclarke/jer-twentytwentyfive-child-theme.git
composer install
# Install/update the /vendor/ copy of Chromedriver
vendor/bin/codecept chromedriver:update
# Insert latest WP into tests/_wordpress/
curl -sLO https://wordpress.org/latest.zip && unzip -q latest.zip && mv wordpress/* tests/_wordpress/ && rm -rf wordpress latest.zip
```

# Killall PHP/Chromedriver to fix local connection errors

Note that when messing around with this locally, you'll often get errors like the following:

>  "Starting PHP built-in server on port 11527 to serve tests/_wordpress ... In PhpBuiltInServer.php line 63: Port 11527 is already in use."

and: 

>  Starting ChromeDriver on port 25626 ... In ChromeDriver.php line 76:  Could not start ChromeDriver: Starting ChromeDriver 149.0.7827.155 (07b52360cc15066f987c910ab34dfbcd4a8778d2  -refs/branch-heads/7827@{#3246}) on port 25626 ...  Only local connections are allowed."

These sound worse than they are! It's just a result of starting the process in multiple terminal tabs, killall both processes and it will probably clear up:

```bash
killall php && killall chromedriver
```
