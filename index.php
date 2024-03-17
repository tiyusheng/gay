<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="theme-color" content="#595f69" id="themeColor">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <title>再一次遇见你</title>
  <style>
    html,body {
      margin: 0;
      height: 100%;
    }
    body {
      font-family: -apple-system, sans-serif;
      font-weight: 300;
      letter-spacing: 1px;
      background-image: url(images/flag-light.png),linear-gradient(#FFF 0%, #F1F2FE 100%);
      background-size: 1000px auto, cover;
      background-repeat: no-repeat;
      background-position: 45% 0, 50% 100%;
      background-attachment: fixed;
      position: relative;
    }
    header {
      max-width: 1000px;
      margin: 0 auto;
      padding: 6% 0 4%;
    }
    header::before {
      position: absolute;
    }
    h1 {
      height: 60px;
      margin: 0;
      background-image: url(images/logo.svg);
      background-size: auto 100%;
      background-repeat: no-repeat;
      color: transparent;
    }
    h1 + p {
      margin: 5px 0 0;
      color: #67686e;
      text-indent: 5px;
      font-size: 22px;
      text-transform: uppercase;
    }
    section {
      display: flex;
      flex-wrap: wrap;
      max-width: 1000px;
      margin: 0 auto;
      padding: 0 0 450px;
    }
    section h2 {
      position: absolute !important;
      clip: rect(1px 1px 1px 1px);
      clip: rect(1px,1px,1px,1px);
      padding: 0 !important;
      border: 0 !important;
      height: 1px !important;
      line-height: 0 !important;
      width: 1px !important;
      overflow: hidden;
    }
    section article {
      width: 50%;
      padding: 0 5% 0 0;
      box-sizing: border-box;
    }
    section article:nth-child(2n+1) {
      padding: 0 0 0 5%;
    }
    section article p {
      color: #67686e;
    }
    body > b {
      position: fixed;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      background-image: url(images/bg.min.png);
      background-size: 1000px auto;
      background-position: 50% 110%;
      background-repeat: no-repeat;
      pointer-events: none;
    }
    @media screen and (max-width: 640px) {
      header {
        padding: 8% 5% 4%;
      }
      header h1 {
        height: 36px;
      }
      h1 + p {
        font-size: 13px;
      }
      section {
        padding: 0 5% 25vh;
        background: #fff;
        border-radius: 10px 10px 0 0;
        box-shadow: 0 -1px 10px rgba(0,0,0,.1);
      }
      section article,
      section article:nth-child(2n+1) {
        width: 100%;
        padding: 0;
      }
      body > b {
        background-size: 100% auto;
      }
    }

    /* 新增样式，调整作者信息的样式 */
    .author-info {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: transparent; /* 背景透明 */
      padding: 10px;
      text-align: left; /* 文本左对齐 */
      display: flex; /* 使用 flex 布局 */
      align-items: center; /* 垂直居中对齐 */
    }

    .author-info img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px; /* 添加间距 */
    }
  </style>
</head>
<body>
  <header>
    <h1>GAY.CYOU 再次遇见你</h1>
    <p>Transmit value and culture</p>
    <p>修订时间：2023-12-06</p>
  </header>
  <section>
    <h2>Values</h2>
    <article>
      <h3>尊重</h3>
      <p>美好的未来总是在前方等待着我们。即便此刻的交流只能透过屏幕进行，我坚持认为每个人都应该受到公正和真诚的对待。</p>
    </article>
    <article>
      <h3>决心</h3>
      <p>充实而美好的生活取决于我们对生活的坚定决心，我们有能力实现心中所想的每一件事！</p>
    </article>
    <article>
      <h3>责任</h3>
      <p>无论事态如何发展，我们都要勇敢地承担责任，接受一切结果，无惧困难！</p>
    </article>
    <article>
      <h3>个性</h3>
      <p>让我们为世界上存在的各种文化和不同种族欢呼喝彩吧；我们需要相互学习，共同成长，彼此依存，共同创造更美好的未来！</p>
    </article>
  </section>
  <b></b>

  <!-- 添加作者信息部分 -->
  <div class="author-info">
    <img src="https://chenjialuo.cn/wp-content/uploads/2023/10/e-150x150.webp" alt="Author Avatar">
    <p>公益项目</p>
  </div>
</body>
</html>
