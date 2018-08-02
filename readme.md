# Project Manager v0.0.2
Its a small php application which allows you to manage your htdocs
directory via a GUI.

## Setup
extract everything into your/webserver/htdocs/project_manager
create the following index.php in your htdocs folder:

```php
<?php
	header("Location: http://localhost/project_manager");
	die();
```

alternatively you could create a virtual host.


