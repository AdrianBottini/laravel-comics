<main>
    <div class="containerGray">
        <div class="banner"></div>
        <div class="content">
          <div class="series">
            CURRENT SERIES
          </div>
            @foreach ($comics as $item)
                <div class="card">
                    <img src="{{ ($item['thumb']) }}" alt="">
                    <div>
                        {{ ($item['series']) }}
                    </div >
                </div>
            @endforeach

        </div>
        <button>LOAD MORE</button>
    </div>
    <div class="containerBlue">
        <div class="container">
          <div class="boxImgText">
            <div class="logo">
              <img
                src="/img/buy-comics-digital-comics.png"
                alt=""
              >
            </div>
            <div>DIGITAL COMICS</div>
          </div>
          <div class="boxImgText">
            <div class="logo">
              <img
                src="/img/buy-comics-merchandise.png"
                alt=""
              >
            </div>
            <div>DC MERCHANDISE</div>
          </div>
          <div class="boxImgText">
            <div class="logo">
              <img
                src="/img/buy-comics-subscriptions.png"
                alt=""
              >
            </div>
            <div>SUBSCRIPTION</div>
          </div>
          <div class="boxImgText">
            <div class="logo">
              <img
                src="/img/buy-comics-shop-locator.png"
                alt=""
              >
            </div>
            <div>COMICS SHOP LOCATOR</div>
          </div>
          <div class="boxImgText">
            <div
              id="special"
              class="logo"
            >
              <img
                src="/img/img/buy-dc-power-visa.svg"
                alt=""
              >
            </div>
            <div>DC POWER VISA</div>
          </div>
        </div>
      </div>

</main>
