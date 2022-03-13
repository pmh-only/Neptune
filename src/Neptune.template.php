<?php

class NeptuneTemplate extends BaseTemplate {
	public function execute() {
    $this->data['content_actions']['nstab-main']['text'] = wfMessage('view')->parse();
    $this->html( 'headelement' ); ?>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <!-- Neptune Skin Start -->

      <?php $this->printTrail(); ?>
        <div class="flex justify-center">
          <div class="container px-0.5 py-1 justify-center w-full gap-2 items-start lg:my-5 flex flex-col-reverse lg:flex-row lg:px-10 max-w-5xl">
            <div class="w-full shadow-lg bg-white rounded-lg" >
              <div class="sticky top-0 z-30">
                <div class="px-5 py-2 border-t-4 border-t-blue-400 bg-neutral-100 border-b-2 flex gap-3 items-end flex-wrap shadow-sm rounded-t">
                  <div class="text-lg font-bold">
                    <?php $this->html( 'title' ); ?>
                  </div>
                  <div class="text-xs text-neutral-500">
                    프흠위키: 프리 흠터레스팅 위키
                  </div>
                </div>
              </div>
              <div id="content" class="text-sm w-full text-neutral-700 overflow-x-scroll">
                <div class="px-5 py-4 w-full min-h-screen" style="max-width: 100vw;">
                  <div id="mw-content-text">
                    <?php $this->html( 'bodytext' ); ?>
                  </div>
                </div>
              </div>
              <div class="rounded-b bg-neutral-100 text-center text-xs py-2 px-5">
                <p><u>미디어(사진, 영상, 음성)를 제외</u>한 모든 문서의 저작권은 퍼블릭 도메인으로 배포되며 <u>누구나 자유롭게 사용 가능합니다.</u></p>
                <p>스킨: <a href="https://github.com/pmh-only/Neptune">Neptune</a> &copy; 2021-2022 Park Min Hyeok; 해당 위키는 대한민국 법령을 최대한 따르고자 노력하고 있습니다.</p>
                <p>허락없이 기재된 특정인의 대한 개인정보는 예고없이 삭제될 수 있습니다. 저작권 및 명예훼손 문의: <a href="mailto:wiki@pmh.codes">wiki@pmh.codes</a></p>
              </div>
            </div>
            <div class="flex flex-row flex-wrap justify-center lg:flex-col gap-1 lg:gap-4 sticky top-0 text-center">
              <nav class="flex flex-row lg:flex-col bg-blue-400 shadow rounded-lg">
                <a title="대문으로 이동합니다." href="/wiki/대문" class="px-3 py-2 hover:bg-blue-500 hover:text-neutral-200 rounded-lg">
                  <i class="fas fa-home text-neutral-100"></i>
                </a>
              </nav>
              <nav class="flex flex-row lg:flex-col bg-white shadow rounded-lg">
                <a title="최근 편집된 문서 목록입니다." href="/wiki/특수:최근바뀜" class="border-b px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700">
                  <i class="fas fa-exchange-alt text-neutral-600"></i>
                </a>
                <a title="문서를 검색할 수 있습니다." href="/wiki/특수:검색" class="px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700">
                  <i class="fas fa-search text-neutral-600"></i>
                </a>
              </nav>
              <nav class="flex flex-row lg:flex-col bg-white shadow rounded-lg">
                <a title="보기 모드로 이동합니다." href="<?php echo $this->data['content_actions']['view']['href'] ?? '#' ?>" class="border-b px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700">
                  <i class="fas fa-eye text-neutral-600"></i>
                </a>
                <a title="시각 편집 모드로 이동합니다." id="ca-edit" class="border-b px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="<?php echo $this->data['content_actions']['ve-edit']['href'] ?? '#' ?>">
                  <i class="fas fa-pen text-neutral-600"></i>
                </a>
                <a title="레거시 편집 모드로 이동합니다." class="border-b px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="<?php echo $this->data['content_actions']['edit']['href'] ?>">
                  <i class="fas fa-pencil-alt text-neutral-600"></i>
                </a>
                <a title="문서의 기여 기록을 확인합니다." class="border-b px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="<?php echo $this->data['content_actions']['history']['href'] ?>">
                  <i class="fas fa-history text-neutral-600"></i>
                </a>
                <a title="위키백과에서 연관된 결과를 보실 수 있습니다." class="px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="https://ko.wikipedia.org/wiki/<?php $this->html( 'title' ); ?>">
                  <i class="fab fa-wikipedia-w text-neutral-600"></i>
                </a>
              </nav>
              <nav class="flex flex-row lg:flex-col bg-white shadow rounded-lg">
    
                <?php
                if ($this->getSkin()->getUser()->isRegistered()) { ?>
                  <a title="파일 업로드" class="border-b px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="https://wiki.pmh.codes/wiki/특수:업로드">
                    <i class="fas fa-cloud-upload-alt text-neutral-600"></i>
                  </a>
                  <a title="환경설정" class="border-b px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="https://wiki.pmh.codes/wiki/특수:환경설정">
                    <i class="fas fa-cogs text-neutral-600"></i>
                  </a>
                  <a title="로그아웃" class="px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="https://wiki.pmh.codes/wiki/특수:로그아웃">
                    <i class="fas fa-sign-out-alt text-neutral-600"></i>
                  </a>
                <?php } else { ?>
                  <a title="로그인" class="px-3 py-2 hover:bg-neutral-200 hover:text-neutral-700" href="https://wiki.pmh.codes/wiki/특수:로그인">
                    <i class="fas fa-sign-in-alt text-neutral-600"></i>
                  </a>
                <?php } ?>
              </nav>
            </div>
          </div>
        </div>
      </body>

      <!-- Neptune Skin End -->
    </html>
  <?php
	}
}
