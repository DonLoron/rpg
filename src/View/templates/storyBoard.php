<ul class="stories">
  <? foreach($this->data->getStories() as $storyPoint) { ?>
    <li class="story">
      <?= (new StoryPointBoard($storyPoint))->parse(); ?>
    </li>
  <? } ?>
</ul>