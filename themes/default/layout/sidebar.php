<?PHP

  namespace Steampixel;

  // Get the component props
  $lang = $this->prop('lang', [
    'type' => 'string',
    'required' => true
  ]);

  $title = $this->prop('title', [
    'type' => 'string',
    'required' => true
  ]);

  $subtitle = $this->prop('subtitle', [
    'type' => 'string',
    'required' => false
  ]);

  $hero_size = $this->prop('hero_size',[
    'type' => 'string',
    'required' => false,
    'default' => 'small'
  ]);

?><!DOCTYPE html>
<html lang="<?=$lang ?>">

  <head>

    <?=Component::create('partials/title')->assign(['title'=>$title])->render() ?>

    <?=Component::create('partials/meta')->render() ?>

    <?=Component::create('partials/style')->render() ?>

  </head>

  <body>

    <?=Component::create('partials/navigation') ?>

    <?=Component::create('content/hero')->assign(['title' => $title, 'size' => $hero_size]) ?>

    <section class="section">
      <div class="container">

        <div class="columns">

          <div class="column is-one-fifth">

            <?=Component::create('partials/sidebar')->assign(['title' => $subtitle]) ?>

          </div>

          <div class="column">

            <?=Component::create('partials/content') ?>

          </div>

        </div>
      </div>
    </section>

    <?=Component::create('partials/footer') ?>

    <?=Component::create('partials/javascript') ?>

  </body>

</html>
