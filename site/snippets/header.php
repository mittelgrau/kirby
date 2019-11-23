<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!-- The title tag we show the title of our site and the title of the current page -->
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <!-- Stylesheets can be included using the `css()` helper. Kirby also provides the `js()` helper to include script file.
        More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers -->
  <?= css(['assets/main.css', '@auto']) ?>
</head>
<body class="container mx-auto px-20 mt-12">
<header>
      <nav id="menu" class="menu">
      <ul>
            <?php foreach($site->children()->listed() as $page): ?>
                  <li class="inline mr-2"> <a href="<?= $page->url() ?>"> <?= $page->title() ?> </a> </li>
            <?php endforeach ?>
      </ul>
      </nav>
</header>
