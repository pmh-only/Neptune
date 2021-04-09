<?php
use Wikimedia\AtEase\AtEase;

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

class NeptuneTemplate extends BaseTemplate {
	public function execute() {
    AtEase::suppressWarnings();
    $url = htmlspecialchars( $this->data['nav_urls']['mainpage']['href'] );

    $this->data['content_actions']['nstab-main']['text'] = "본문";

		$this->html( 'headelement' ); ?>
      <?php $this->printTrail(); ?>

        <!-- Start of Template -->

          <nav class="nep-nav">
            <hr class="nep-top-decoration" />
            <div class="nep-nav-content">
              <div class="nep-sitename">
                <a href="<?php echo $url ?>">
                  <img
                    height="30"
                    alt="<?php $this->text( 'sitename' ); ?>" 
                    src="<?php $this->text( 'logopath' ); ?>"/>
                </a>
                <a href="<?php echo $this->data['content_actions']['nstab-main']['href'] ?>">
                  <?php $this->html( 'title' ); ?>
                </a>
              </div>

              <div class="nep-pagetools">
                <ul>
                  <?php
                    array_pop($this->data['content_actions']);
                    foreach ( $this->data['content_actions'] as $key => $tab ) {
                      echo $this->makeListItem( $key, $tab );
                    }
                  ?>
                </ul>
              </div>
            </div>
          </nav>

          <main id="content">
            <div class="nep-content">
              <?php $this->html( 'bodytext' ); ?>
            </div>
          </main>

          <footer>
            <?php $this->html( 'catlinks' ); ?>
          </footer>

        <!-- End of Template -->

      </body>
    </html>
  <?php
	}
}