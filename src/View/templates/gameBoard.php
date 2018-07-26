<main>
  <aside>
    <h1>Character</h1>
    <div id="characterBoard">
      <?= $this->data['characterBoard']->parse('characterBoard.php') ?>
    </div>
  </aside>
  <article>
    <div id="storyBoard">
      <?= $this->data['storyBoard']->parse('storyBoard.php') ?>
    </div>
    <div id="actionBoard">
      <?= $this->data['actionBoard']->parse('actionBoard.php') ?>
    </div>
  </article>
</main>
