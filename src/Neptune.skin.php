<?php

/**
 * 🚀 Neptune mediawiki skin
 * 
 * @author Park Min Hyeok <pmh-only@pmh.codes>
 * @copyright 2021 - 2022. Park Min Hyeok <pmh-only@pmh.codes>
 * 
 * @see README.md
 * @license MIT
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
