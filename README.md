README
======

What is DocumentorBundle?
----------------

DocumentorBundle is a bundle for Symfony2 project that enables generation of project's documentation with app/console command, after which documentation is
accessible with the browser by entering the location of the newly generated documentation.


Features
--------

DocumentorBundle sports the following:

* *Generates documentation with a simple console command.
* *No need to enter source and target paths.
* *Configurable so that it only works in development environment.


Requirements
------------

DocumentorBundle requires the following:

* PHP 5.3.3 or higher
* [phpDocumentor2](https://github.com/phpDocumentor/phpDocumentor2) 
* phpdoc command callable


Installation
------------

1. Download the bundle from https://github.com/artur-gajewski/phpDocumentorBundle

2. Add the bundle into AppKernel.php file in your Symfony2 project


How to use DocumentorBundle?
-------------------

Go to your project root and run the command:

    $ app/console documentor:dump

This command will go through your src folder and created documentation based on the files within that folder.

Once the generation of documentation is complete, you need to install the assets into the web folder:

    $ app/console assets:install

Now all you have to do is point your browser to http://www.yourproject.com/agadocumentor/index.html


Known issues
------------

1. Currently DocumentorBundle also document's itself if the bundle is located under the SRC directory.


Contact
-------

To come in contact is actually dead simple and can be done in a variety of ways.

* Twitter: [@GajewskiArtur](http://twitter.com/GajewskiArtur)
* Github: [https://github.com/artur-gajewski](https://github.com/artur-gajewski)
* E-mail:  [info@arturgajewski.com](mailto:info@arturgajewski.com)
