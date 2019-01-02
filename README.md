# APLib

> A PHP library to create your website smooth, easy &amp; secure.

## Setup

1. Download APLib:
   * `cd [DOCUMENT ROOT]`
   * `git clone https://github.com/alma3lol/APLib.git`
2. Download dependecies:
   * `cd 'APLib/composed'`
   * `php composer.phar install`
3. Download [APLib externals](https://github.com/alma3lol/APLib-ext/):
   * `git clone https://github.com/alma3lol/APLib-ext.git`
4. Put everything in place:
   * Move all sub folders of APLib-ext folder to `DOCUMENT ROOT`

## Usage

Using **APLib** can be complex, but let's start step-by-step:

   1. Include _APLib_ in your project:
      ```php
      require_once('PATH/TO/APLib/core.php');
      ```
   2. Initiate the library:
      ```php
      \APLib\Core::init();
      ```
      * Optionally configure settings using *config* class:
        ```php
        \APLib\Config::set('SETTING NAME', 'SETTING VALUE');
        ```

        For example:
        ```php
        \APLib\Config::set('title', "My page's title");
        ```
        This will set the page's title (`<title>My page's title</title>`).
   3. Add your body:
      ```php
      \APLib\Response\Body::add("<h3>Hello code</h3>");
      ```
   4. Run the library to deliver your page:
      ```php
      \APLib\Core::run();
      ```

## Structure

APLib's structure is very easy to understand.
You can find anything in a class path related to the usage path.

* If you need to print a JavaScript code in the body of the page, then go as follows:

   ```php
   Response -> Body -> JavaScript -> Add
   ```

   In code:

   ```php
   \APLib\Response\Body\JavaScript::add("// CODE HERE");
   ```

   **NOTE:** The JavaScript code above is a code without `<script />` tags.

* To check if the request was a POST request, then do as follows:

   ```php
   Request -> HTTP -> POST
   ```

   In code:

   ```php
   if(\APLib\Request\HTTP::post())
   {
     // Do some post handling here
   }
   ```

* To check if the request was a JSON payload:

  ```php
  Request -> HTTP -> JSON
  ```

  In code:

  ```php
  if(\APLib\Request\HTTP::json())
  {
    // Do some JSON handling here
  }
  ```

  * Read the JSON payload:
    ```php
    Request -> HTTP -> Data
    ```

    In code:
    ```php
    $payload = \APLib\Request\HTTP::data();
    ```

Now with this explanation of how **APLib** is structured, you can find pretty much everything.

### Wiki

You can see the [wiki](https://github.com/alma3lol/APLib/wiki/) for a better understanding of what **APLib** is capable of.

#### Examples

APLib now has a repository for examples: [https://github.com/alma3lol/APLib-Examples/](https://github.com/alma3lol/APLib-Examples/).
