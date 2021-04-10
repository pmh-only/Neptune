<?php

class NeptuneTemplate extends BaseTemplate {
	public function execute() {
    $url = htmlspecialchars( $this->data['nav_urls']['mainpage']['href'] );

    $this->data['content_actions']['nstab-main']['text'] = wfMessage('view')->parse();

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
                  <li class="nep-dropdown">
                    <a class="fas fa-bars"></a>
                    <div class="nep-dropdown-content">
                      <ul>
                        <?php
                          foreach ( $this->getToolbox() as $key => $tbitem ) {
                            echo $this->makeListItem( $key, $tbitem );
                          }
                        ?>
                      </ul>
                    </div>
                  </li>
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