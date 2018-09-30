<div class="storyPoint">
  <span class="dateTime"><?= $this->data->time->getTime() ?></span>
  <? if($this->data->title != "") { ?>
    <h3><?= $this->data->title ?></h3>
  <? } ?>
  <? if($this->data->text != "") { ?>
    <p><?= $this->data->text ?></p>
  <? } ?>
</div>