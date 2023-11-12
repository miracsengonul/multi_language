#PHP Multi Language Library
========

This class is a PHP library that allows you to add multi-language support to your project.

- [Installation](#installation)
- [Simple Usage](#usage)
- [Example](#example)


<a href="#installation"></a>
## Installation

Run the following code in the directory of your project.

> composer require mirac/multilanguage dev-master

If there is no Composer autoload command on your page, add the following command at the beginning of your page.
```php
require_once __DIR__ . '/vendor/autoload.php';
```
Let's continue below this line. Since we will create a 'lang' folder in the project directory, add the following commands.
```php
use Mirac\MultiLanguage\Create;
Create::folder();
```
After adding these lines to your page, access it through your browser. You will see a folder named 'lang' created in your directory.

> We will add all language files to this folder later.

After seeing that the folder has been created, let's delete the two lines we added earlier because our job is done.

```php
/*
use Mirac\MultiLanguage\Create;
Create::folder();
*/
```

Instead, let's add the following lines.

```php
use Mirac\MultiLanguage\Language;
use Mirac\MultiLanguage\Select;

$lang = new Language();
$select  = new Select();
```
That's all for configuration. Now we can add languages.

<a href="#usage"></a>
## Usage

- [Adding Language Files](#lang-klasörü-İçine-dil-dosyası-ekleme)
- [Using on the Page](#sayfada-kullanma)
- [Visitor Language Selection](#ziyaretçinin-dil-seçmesi)

<a href="#dosya-ekle"></a>
### Adding Language Files to the 'lang' Folder

To translate files, we need to create folders with country codes inside the created 'lang' folder in our directory.

Example:

For Turkish, we create a folder named 'tr'. Then we add our translation files to it.

You can add a folder and translation file for any language you want.

Let's create a language file named 'homepage' for Turkish. Depending on the size of your site, you can duplicate your files. But don't forget to translate the same files!

Let's create our file containing the translations of our homepage in the 'tr' folder as 'homepage.php'.
> lang/tr/homepage.php

```php
<?php

return [
    'title' => 'Homepage',
    'contact' => 'Contact',
    'page' => 'Page',
    'photo' => 'Photo'
];

  ```
  Bu çeviri dosyasını istediğiniz dile çevirebilirsiniz.

  > lang/en/homepage.php

  ```php
<?php

return [
    'title' => 'Homepage',
    'contact' => 'Contact',
    'page' => 'Page',
    'photo' => 'Photo'
];

  ```

  > lang/de/homepage.php

  ```php
<?php

return [
    'title' => 'Homepage',
    'contact' => 'Contact',
    'page' => 'Page',
    'photo' => 'Photo'
];

  ```

You can add unlimited languages and files like this.

  <a href="#ozel-input"></a>
  ### Using on the Page

  After creating the files, we use the following command to use them on our pages.

  > $lang->lang('filename.key');

  For Example:

  > $lang->lang('homepage.photo');

  This example command will give us the translation of the 'photo' key in the 'homepage.php' file inside the selected language folder.

  ```php
  <?php

  echo "Menus ".
  $lang->lang('homepage.title')."<br>".
  $lang->lang('homepage.photo')."<br>".
  $lang->lang('homepage.contact')."<br>";
  ```

You can use it in your code as shown in the example above.

  ### Visitor Language Selection


  To allow your visitors to choose a language, you can integrate the following command into your page.

  > $select->language('tr')

  > $select->language('en')

  > $select->language('de')
  
  > $select->language('..')

  Example:
  ```php
  echo "<a href='".$select->language('tr')."'>TR</a><br>";
  echo "<a href='".$select->language('en')."'>EN</a><br>";
  echo "<a href='".$select->language('de')."'>DE</a><br>";
  ```

  By providing links like this, when the visitor clicks, the language file you added will be activated automatically.

  > These language names are connected to the language files we created in the 'lang' folder.

