@extends('layouts.app')

@section('content')
    <!-- 招待状トップ画面 -->
    <div class="main-wrapper">
      <div class="main-img"></div>
      <div class="weed-invi">WEEDING INVITATION</div>
      <div class="main-container">
        <!-- WEB招待状回答ボタン -->
        <a class="invi-btn" href="">
          <p class="invi-text">招待状に<br>回答する</p>
        </a>
        <!-- //WEB招待状回答ボタン -->
        <div class="name-date">
          <div class="invi-name">
            <ul class="groom">
              <li class="gr-img">
                <img src="{{ asset ('images/groom-img.jpg') }}" >
              </li>
              <li class="gr-name">Taro</li>
              <li class="date">
              <h1 class="join">Please join us to celebrate</h1>
              <p>2026. 06. 26<br>Sat.</p>
              </li>
            </ul>
            <div class="and">&</div>
            <ul class="bride">
              <li class="br-name">Hanako</li>
              <li class="br-img">
                <img src="{{ asset  ('images/bride-img.jpg') }}" >
              </li>
            </ul>
          </div>

        </div>
        
        <div class="greeting-img fixed-bg">
          <h2 class="greeting-text" style="word-break: keep-all;">
          謹啓　皆様にはお健やかにお過ごしのことと
          お喜び申し上げます
          このたび私共二人は結婚式を挙げることになりました
          つきましてはご多用中誠に恐縮ではございますが
          ささやかな宴を催したいと存じますので
          ご出席くださいますようご案内申し上げます　敬具<br>
          2026年6月吉日
          </h2>
        </div>

      <div class="sub-container">
            <div class="invi-info">
              <div class="host">
                <h2><i class="material-icons">volunteer_activism</i><span>HOST</span></h2>
                <div class="host-name">
                  <p>groom</p>
                  <h1>山田 太郎</h1>
                  <p>bride</p> 
                  <h1>田中 花子</h1>
                </div>
              </div>
              <div class="information">
                <h2><i class="material-icons">info</i><span>INFORMATION</span></h2>
                <ul>
                  <li>WEEDING CEREMONY</li>
                  <li>挙式・披露宴</li>
                  <li>2026.06.26 Sat.</li>
                  <li>挙式 / 15:30</li>
                  <li>受付 / 14:45</li>
                  <li>披露宴 / 16:30</li>
                  <li>お披楽喜 / 19:00</li>
                </ul>
              </div>
              <div class="access">
                <h2><i class="material-icons">church</i><span>VENUE ACCESS</span></h2>
                <ul>
                  <li>〇〇〇〇〇〇会場</li>
                  <li>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.827853402469!2d139.7649307506458!3d35.68124053748211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1650958466995!5m2!1sja!2sjp" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </li>
                  <li>〇〇県〇〇市〇〇区〇〇〇1-2-3</li>
                  <li>電話番号 / 0120-123-1234</li>
                  <li><a href="/">https://www.yahoo.co.jp/</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="deadline">
            お手数ではございますが<br>
            5月26日 までにご返信くださいますよう<br>
            お願いいたします
          </div>
        </div>
      <!-- フッターの部分テンプレートへ遷移 -->
      <!-- <%= render "shared/footer" %> -->
    </div>
    <!-- //招待状トップ画面 -->
@endsection
