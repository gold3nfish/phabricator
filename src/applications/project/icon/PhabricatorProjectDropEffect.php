<?php

final class PhabricatorProjectDropEffect
  extends Phobject {

  private $icon;
  private $color;
  private $content;

  public function setIcon($icon) {
    $this->icon = $icon;
    return $this;
  }

  public function getIcon() {
    return $this->icon;
  }

  public function setColor($color) {
    $this->color = $color;
    return $this;
  }

  public function getColor() {
    return $this->color;
  }

  public function setContent($content) {
    $this->content = $content;
    return $this;
  }

  public function getContent() {
    return $this->content;
  }

  public function toDictionary() {
    return array(
      'icon' => $this->getIcon(),
      'color' => $this->getColor(),
      'content' => hsprintf('%s', $this->getContent()),
    );
  }

}