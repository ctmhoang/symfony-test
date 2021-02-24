# Notes

## Basic

* Bundle => symfony plugin
* Other composure plugin (flex is composer plugin)

## Symfony cli

* symfony check:req
* symfony new `dir`
    * create and git init
* symfony serve > php -S localhost -t `dir`
    * no-tls
    * deamon (-d)
* symfony server:stop|status

* php `bin/console`
    * Debugging tools

## Create route

* Using YAML in config folder
* Use annotations
    * Do not use apostrophe in this => throw exception
    * St between curly braces in a route => becomes a wildcard (name are arg name)

## composer (alias cps)

* has alias and recipe
* cps require annotations (like install npm)
* cps remove
  *pkgs-alias
    * annotations
    * sec-checker
* flag
    * --dev
* recipe pkg

## Controller

* Render template `extends AbstractController`
    * `render'(filename from path in config,[variables])`

## Twig

* Config file in config/pkgs
* 3 type of syntax
    * `{{}}`print
      *`{%%}`expression
    * `{##}` comment
* Twig has 3 types of operation
    * Tags (has end tags)
        * `extends`
            * Can overwrite tags in template
        * `block`
    * Filter (Like Piping |)
    * Function
    * Test (is keyword)
  