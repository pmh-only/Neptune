<?php

/**
 * 🚀 Neptune mediawiki skin
 * 
 * @author Park Min Hyeok <pmhstudio.pmh@gmail.com>
 * @copyright 2021. Park Min Hyeok <pmhstudio.pmh@gmail.com>
 * 
 * @see README.md
 * @license MIT
 * 
 * to customize colors: see styles/main.css
 */

class SkinNeptune extends SkinTemplate {
  var $skinname = 'neptune';
  var $stylename = 'Neptune';
  var $template = 'NeptuneTemplate';
  
  public function initPage( OutputPage $out ) {
    parent::initPage( $out );
    $out->addModules( 'skins.neptune.js' );
  }

  function setupSkinUserCss( OutputPage $out ) {
    parent::setupSkinUserCss( $out );
    $out->addModuleStyles(
      array(
        'mediawiki.skinning.interface',
        'skins.neptune'
      )
    );
  }
}
