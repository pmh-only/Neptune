<?php

class NeptuneTemplate extends BaseTemplate {
	public function execute() {
    $this->data['content_actions']['nstab-main']['text'] = wfMessage('view')->parse();
    $this->html( 'headelement' ); ?>

      <!-- Neptune Skin Start -->

      <?php $this->printTrail(); ?>
        <div class="flex justify-center">
          <div class="container py-1 my-5 flex justify-center w-full gap-2 items-start">
            <div class="shadow bg-white rounded-lg min-w-full" >
              <div class="sticky top-0 z-50">
                <div class="px-5 py-2 border-t-4 border-t-blue-400 bg-neutral-100 border-b-2 flex gap-3 items-end flex-wrap shadow-sm rounded">
                  <div class="text-lg font-bold">
                    <?php $this->html( 'title' ); ?>
                  </div>
                  <div class="text-xs text-neutral-500">
                    프흠위키: 편집자들이 완전히 돌아버린 위키
                  </div>
                </div>
              </div>
              <div id="content">
                <div class="px-5 py-4">
                  <div id="mw-content-text">
                    <?php $this->html( 'bodytext' ); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-col gap-4 sticky top-0 text-center">
              <nav class="flex flex-col bg-white shadow rounded-lg">
                <a href="/wiki/대문" class="border-b px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700">
                  <i class="fas fa-home text-neutral-600"></i>
                </a>
                <a href="/wiki/특수:최근바뀜" class="border-b px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700">
                  <i class="fas fa-exchange-alt text-neutral-600"></i>
                </a>
                <a href="/wiki/특수:검색" class="px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700">
                  <i class="fas fa-search text-neutral-600"></i>
                </a>
              </nav>
              <nav class="flex flex-col bg-white shadow rounded-lg">
                <a href="<?php echo $this->data['content_actions']['view']['href'] ?>" class="border-b px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700">
                  <i class="fas fa-eye text-neutral-600"></i>
                </a>
                <a id="ca-edit" class="border-b px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="<?php echo $this->data['content_actions']['ve-edit']['href'] ?>">
                  <i class="fas fa-pen text-neutral-600"></i>
                </a>
                <a class="border-b px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="<?php echo $this->data['content_actions']['edit']['href'] ?>">
                  <i class="fas fa-pencil-alt text-neutral-600"></i>
                </a>
                <a class="px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="<?php echo $this->data['content_actions']['history']['href'] ?>">
                  <i class="fas fa-history text-neutral-600"></i>
                </a>
              </nav>
              <nav class="flex flex-col bg-white shadow rounded-lg">
    
                <?php
                global $wgUser;
                if ($wgUser->isLoggedIn()) { ?>
                  <a class="border-b px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="https://wiki.pmh.codes/wiki/특수:업로드">
                    <i class="fas fa-cloud-upload-alt text-neutral-600"></i>
                  </a>
                  <a class="border-b px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="https://wiki.pmh.codes/wiki/특수:환경설정">
                    <i class="fas fa-cogs text-neutral-600"></i>
                  </a>
                  <a class="px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="https://wiki.pmh.codes/wiki/특수:로그아웃">
                    <i class="fas fa-sign-out-alt text-neutral-600"></i>
                  </a>
                <?php } else { ?>
                  <a class="px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="https://wiki.pmh.codes/wiki/특수:로그인">
                    <i class="fas fa-sign-in-alt text-neutral-600"></i>
                  </a>
                <?php } ?>
              </nav>
            </div>
          </div>
        </div>
      </body>

      <!-- Neptune Skin End -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    </html>
  <?php
	}
}
