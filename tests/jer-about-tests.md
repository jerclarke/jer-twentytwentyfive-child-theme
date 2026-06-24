# Jer's notes about the testing setup

* Initial setup with instructions from https://github.com/lucatume/wp-browser

```bash
cd jer-twentytwentyfive-child-theme
# Add wp-browser dependency in composer
composer require --dev lucatume/wp-browser
# Use default setup: "portable configuration based on PHP built-in server, Chromedriver and SQLite."
vendor/bin/codecept init wpbrowser
# Run tests (it set up some default "smoke" tests for itself)
vendor/bin/codecept run
```